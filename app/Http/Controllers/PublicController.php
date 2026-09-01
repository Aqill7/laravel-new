<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\BookingItem;
use App\Models\Category;
use App\Models\Fine;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\RentalRule;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PublicController extends Controller
{
    public function landingPage()
    {
        $categories = Category::all();
        $popularProducts = Product::with('category', 'images')->take(3)->get();

        return view('landing-page', compact('categories', 'popularProducts'));
    }

    public function katalog(Request $request)
    {
        $search = $request->input('search');
        $categoryId = $request->input('category');

        $categories = Category::all();
        $products = Product::with('category', 'images')
            ->when($search, function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->when($categoryId, function ($query, $categoryId) {
                $query->where('category_id', $categoryId);
            })
            ->paginate(12)
            ->withQueryString();

        return view('katalog-produk', compact('categories', 'products', 'search', 'categoryId'));
    }

    public function katalogByCategory($categorySlug)
    {
        $category = Category::where('slug', $categorySlug)->firstOrFail();
        $search = null;
        $categoryId = $category->id;

        $categories = Category::all();
        $products = Product::with('category', 'images')
            ->where('category_id', $category->id)
            ->paginate(12)
            ->withQueryString();

        return view('katalog-produk', compact('categories', 'products', 'category', 'search', 'categoryId'));
    }

    public function detailProduk(Product $product)
    {
        $product->load('category', 'images');

        $relatedProducts = Product::with('category', 'images')
            ->where('id', '!=', $product->id)
            ->inRandomOrder()
            ->take(4)
            ->get();

        return view('detail-produk', compact('product', 'relatedProducts'));
    }

    public function keranjang()
    {
        $keranjang = session()->get('keranjang', []);

        return view('keranjang', compact('keranjang'));
    }

    public function tambahKeranjang(Request $request, Product $product)
    {
        $request->validate([
            'quantity' => ['required', 'integer', 'min:1', 'max:'.$product->stock],
        ]);

        $keranjang = session()->get('keranjang', []);
        $productId = $product->id;

        $newQty = isset($keranjang[$productId])
            ? $keranjang[$productId]['quantity'] + (int) $request->quantity
            : (int) $request->quantity;

        if ($newQty > $product->stock) {
            if ($request->expectsJson() || $request->ajax()) {
                return response()->json([
                    'count' => count($keranjang),
                    'error' => 'Jumlah melebihi stok yang tersedia ('.$product->stock.').',
                ], 422);
            }

            return redirect()->route('katalog')->with('error', 'Jumlah melebihi stok yang tersedia ('.$product->stock.').');
        }

        if (isset($keranjang[$productId])) {
            $keranjang[$productId]['quantity'] += (int) $request->quantity;
        } else {
            $keranjang[$productId] = [
                'name' => $product->name,
                'price' => $product->price_per_day,
                'quantity' => (int) $request->quantity,
            ];
        }

        session()->put('keranjang', $keranjang);
        session()->save();

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json(['count' => count($keranjang)]);
        }

        return back()->with('success', 'Produk ditambahkan ke keranjang.');
    }

    public function updateKeranjang(Request $request, $productId)
    {
        $keranjang = session()->get('keranjang', []);
        if (isset($keranjang[$productId])) {
            $keranjang[$productId]['quantity'] = max(1, (int) $request->quantity);
            session()->put('keranjang', $keranjang);
        }

        return redirect()->route('keranjang')->with('success', 'Jumlah produk diperbarui.');
    }

    public function hapusKeranjang($productId)
    {
        $keranjang = session()->get('keranjang', []);
        if (isset($keranjang[$productId])) {
            unset($keranjang[$productId]);
            session()->put('keranjang', $keranjang);
        }

        return redirect()->route('keranjang')->with('success', 'Produk dihapus dari keranjang.');
    }

    public function peraturanSewa()
    {
        $rules = RentalRule::all();

        return view('peraturan-sewa', compact('rules'));
    }

    public function tentangKami()
    {
        return view('tentang-kami');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function adminLogin()
    {
        return view('login-admin');
    }

    public function adminLoginSubmit(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (auth()->attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    public function adminDashboard()
    {
        $totalProducts = Product::count();
        $totalBookings = Booking::count();
        $activeBookings = Booking::whereIn('status', ['confirmed', 'rented'])->count();
        $recentBookings = Booking::latest()->take(5)->get();
        $totalRevenue = Booking::whereIn('status', ['confirmed', 'rented', 'completed'])->sum('total_price');
        $popularProducts = BookingItem::select('product_id', \DB::raw('count(*) as total'))
            ->groupBy('product_id')
            ->orderBy('total', 'desc')
            ->take(3)
            ->with('product')
            ->get();

        return view('dashboard-admin', compact('totalProducts', 'totalBookings', 'activeBookings', 'recentBookings', 'totalRevenue', 'popularProducts'));
    }

    public function adminProduk(Request $request)
    {
        $search = $request->input('search');
        $products = Product::with('category')
            ->when($search, function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->get();

        return view('produk-admin', compact('products', 'search'));
    }

    public function adminProdukDelete(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.produk')->with('success', 'Produk berhasil dihapus.');
    }

    public function adminProdukCreate()
    {
        $categories = Category::all();

        return view('tambah-produk', compact('categories'));
    }

    public function adminProdukStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'price_per_day' => 'required|numeric',
            'stock' => 'required|integer',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,max:5120',
        ]);

        $validated['slug'] = Str::slug($request->name).'-'.rand(100, 999);

        $product = Product::create($validated);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('products', 'public');
                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $imagePath,
                ]);
            }
        }

        return redirect()->route('admin.produk')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function adminProdukEdit(Product $product)
    {
        $categories = Category::all();

        return view('edit-produk', compact('product', 'categories'));
    }

    public function adminProdukUpdate(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price_per_day' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,max:5120',
            'remove_images' => 'nullable|array',
            'remove_images.*' => 'exists:product_images,id',
        ]);

        $validated['slug'] = Str::slug($request->name).'-'.rand(100, 999);

        $product->update($validated);

        if ($request->has('remove_images')) {
            foreach ($request->input('remove_images') as $imageId) {
                $image = ProductImage::find($imageId);
                if ($image) {
                    if (file_exists(public_path('storage/'.$image->image_path))) {
                        unlink(public_path('storage/'.$image->image_path));
                    }
                    $image->delete();
                }
            }
        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('products', 'public');
                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $imagePath,
                ]);
            }
        }

        return redirect()->route('admin.produk')->with('success', 'Produk berhasil diperbarui.');
    }

    public function adminBooking()
    {
        $bookings = Booking::with('items.product')->latest()->paginate(10);

        return view('booking-admin', compact('bookings'));
    }

    public function adminTransaksi()
    {
        $bookings = Booking::with('items.product')->latest()->paginate(20);

        return view('transaksi-admin', compact('bookings'));
    }

    public function adminDenda()
    {
        $fines = Fine::with('booking')->latest()->paginate(10);

        return view('denda', compact('fines'));
    }

    public function updateBookingStatus(Request $request, Booking $booking)
    {
        $request->validate(['status' => 'required|in:pending,confirmed,rented,completed,cancelled']);

        $oldStatus = $booking->status;
        $booking->update(['status' => $request->status]);

        $booking->load('items.product');

        // Jika status berubah menjadi 'confirmed' dari status selain confirmed/rented (misal: pending, cancelled)
        if ($request->status === 'confirmed' && ! in_array($oldStatus, ['confirmed', 'rented'])) {
            foreach ($booking->items as $item) {
                $item->product->decrement('stock', $item->quantity);
            }
        }

        // Jika status berubah dari confirmed/rented menjadi completed/cancelled, kembalikan stok
        if (in_array($oldStatus, ['confirmed', 'rented']) && in_array($request->status, ['completed', 'cancelled'])) {
            foreach ($booking->items as $item) {
                $item->product->increment('stock', $item->quantity);
            }
        }

        return back()->with('success', 'Status booking #'.$booking->booking_code.' diperbarui.');
    }

    public function adminBookingDelete(Booking $booking)
    {
        $booking->items()->delete();
        $booking->fines()->delete();
        $booking->delete();

        return redirect()->route('admin.booking')->with('success', 'Booking berhasil dihapus.');
    }

    public function storeFine(Request $request)
    {
        $validated = $request->validate([
            'booking_id' => 'required|exists:bookings,id',
            'days_late' => 'required|integer|min:0',
            'amount' => 'required|numeric|min:0',
            'reason' => 'nullable|string',
        ]);

        Fine::create($validated);

        return back()->with('success', 'Denda berhasil ditambahkan.');
    }
}
