<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\BookingItem;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Midtrans\Config;
use Midtrans\Snap;
use Midtrans\Transaction;

class BookingController extends Controller
{
    public function __construct()
    {
        Config::$serverKey = config('services.midtrans.server_key');
        Config::$isProduction = config('services.midtrans.is_production');
        Config::$isSanitized = config('services.midtrans.is_sanitized');
        Config::$is3ds = config('services.midtrans.is_3ds');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => ['required', 'exists:products,id'],
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string'],
            'rental_date' => ['required', 'date'],
            'return_date' => ['required', 'date', 'after:rental_date'],
            'quantity' => ['required', 'integer', 'min:1'],
            'address' => ['nullable', 'string'],
        ]);

        $product = Product::findOrFail($validated['product_id']);

        if ($validated['quantity'] > $product->stock) {
            return back()->with('error', 'Jumlah melebihi stok yang tersedia ('.$product->stock.').');
        }

        $rentalDate = Carbon::parse($validated['rental_date']);
        $returnDate = Carbon::parse($validated['return_date']);
        $duration = $rentalDate->diffInDays($returnDate);
        $subtotal = $product->price_per_day * $validated['quantity'] * $duration;

        $booking = Booking::create([
            'booking_code' => 'BK'.strtoupper(Str::random(8)),
            'customer_name' => $validated['name'],
            'customer_phone' => $validated['phone'],
            'customer_address' => $validated['address'] ?? '-',
            'rental_date' => $validated['rental_date'],
            'return_date' => $validated['return_date'],
            'total_price' => $subtotal,
            'status' => 'pending',
        ]);

        BookingItem::create([
            'booking_id' => $booking->id,
            'product_id' => $validated['product_id'],
            'quantity' => $validated['quantity'],
            'price_per_day' => $product->price_per_day,
            'subtotal' => $subtotal,
        ]);

        $snapToken = $this->generateSnapToken($booking, [
            'rental_date' => $validated['rental_date'],
            'return_date' => $validated['return_date'],
            'customer_name' => $validated['name'],
            'customer_phone' => $validated['phone'],
            'customer_address' => $validated['address'] ?? '-',
            'email' => $validated['email'],
        ]);

        return redirect()->route('booking.success', $booking->booking_code)
            ->with('snapToken', $snapToken);
    }

    public function checkoutKeranjang(Request $request)
    {
        $keranjang = session()->get('keranjang', []);
        if (empty($keranjang)) {
            return redirect()->route('keranjang')->with('error', 'Keranjang kosong.');
        }

        $validated = $request->validate([
            'rental_date' => ['required', 'date'],
            'return_date' => ['required', 'date', 'after:rental_date'],
            'customer_name' => ['required', 'string', 'max:255'],
            'customer_phone' => ['required', 'string', 'max:20'],
            'customer_address' => ['required', 'string'],
            'email' => ['required', 'email'],
        ]);

        $rentalDate = Carbon::parse($validated['rental_date']);
        $returnDate = Carbon::parse($validated['return_date']);
        $duration = $rentalDate->diffInDays($returnDate);
        $totalPrice = 0;

        foreach ($keranjang as $productId => $item) {
            if (! Product::where('id', $productId)->where('stock', '>=', $item['quantity'])->exists()) {
                return redirect()->route('keranjang')->with('error', "Tidak ada stok untuk produk ID {$productId}.");
            }
            $totalPrice += $item['price'] * $item['quantity'] * $duration;
        }

        $booking = Booking::create([
            'booking_code' => 'BK'.strtoupper(Str::random(8)),
            'customer_name' => $validated['customer_name'],
            'customer_phone' => $validated['customer_phone'],
            'customer_address' => $validated['customer_address'],
            'rental_date' => $validated['rental_date'],
            'return_date' => $validated['return_date'],
            'total_price' => $totalPrice,
            'status' => 'pending',
        ]);

        foreach ($keranjang as $productId => $item) {
            BookingItem::create([
                'booking_id' => $booking->id,
                'product_id' => $productId,
                'quantity' => $item['quantity'],
                'price_per_day' => $item['price'],
                'subtotal' => $item['price'] * $item['quantity'] * $duration,
            ]);
        }

        $snapToken = $this->generateSnapToken($booking, $validated);

        session()->forget('keranjang');

        return redirect()->route('booking.success', $booking->booking_code)
            ->with('snapToken', $snapToken);
    }

    protected function generateSnapToken(Booking $booking, array $customerData): string
    {
        $itemDetails = [];
        $rentalDate = Carbon::parse($customerData['rental_date']);
        $returnDate = Carbon::parse($customerData['return_date']);
        $duration = $rentalDate->diffInDays($returnDate);

        foreach ($booking->items as $item) {
            $itemDetails[] = [
                'id' => 'PROD-'.Str::lower(Str::slug($item->product->name)).'-'.$item->product->id,
                'price' => (int) ($item->price_per_day * $item->quantity * $duration),
                'quantity' => $item->quantity,
                'name' => $item->product->name,
                'category' => $item->product->category->name ?? 'Outdoor',
            ];
        }

        $params = [
            'transaction_details' => [
                'order_id' => $booking->booking_code,
                'gross_amount' => (int) $booking->total_price,
            ],
            'customer_details' => [
                'first_name' => $customerData['customer_name'],
                'email' => $customerData['email'] ?? '',
                'phone' => $customerData['customer_phone'],
                'address' => $customerData['customer_address'],
            ],
            'item_details' => $itemDetails,
        ];

        return Snap::getSnapToken($params);
    }

    public function success($code, Request $request)
    {
        $booking = Booking::where('booking_code', $code)
            ->with('items.product.category', 'items.product.images')
            ->firstOrFail();

        $snapToken = $request->get('snapToken') ?? session()->pull('snapToken');

        return view('booking-success', compact('booking', 'snapToken'));
    }

    public function handleNotification(Request $request)
    {
        $payload = $request->all();
        $orderId = $payload['order_id'] ?? null;

        if (! $orderId) {
            return response()->json(['status' => 'error'], 400);
        }

        $booking = Booking::where('booking_code', $orderId)->first();
        if (! $booking) {
            return response()->json(['status' => 'error'], 404);
        }

        $transactionStatus = $payload['transaction_status'] ?? null;

        // Map Midtrans status to local booking & payment status
        $booking->payment_status = $transactionStatus;

        switch ($transactionStatus) {
            case 'capture':
            case 'settlement':
                $booking->status = 'confirmed';
                foreach ($booking->items as $item) {
                    $item->product->decrement('stock', $item->quantity);
                }
                break;
            case 'pending':
                $booking->status = 'pending';
                break;
            case 'cancel':
            case 'deny':
            case 'expire':
                $booking->status = 'cancelled';
                break;
        }

        $booking->save();

        return response()->json(['status' => 'ok']);
    }

    public function syncMidtrans(Request $request)
    {
        $bookings = Booking::where('status', 'pending')->with('items.product')->get();

        foreach ($bookings as $booking) {
            try {
                Config::$serverKey = config('services.midtrans.server_key');
                $status = Transaction::status($booking->booking_code);

                if ($status) {
                    $newStatus = is_array($status) ? ($status['transaction_status'] ?? null) : ($status->transaction_status ?? null);
                    if ($newStatus) {
                        $booking->payment_status = $newStatus;

                        if (in_array($newStatus, ['capture', 'settlement'])) {
                            $booking->status = 'confirmed';
                            foreach ($booking->items as $item) {
                                $item->product->decrement('stock', $item->quantity);
                            }
                        } elseif ($newStatus === 'pending') {
                            $booking->status = 'pending';
                        } elseif (in_array($newStatus, ['cancel', 'deny', 'expire'])) {
                            $booking->status = 'cancelled';
                        }
                        $booking->save();
                    }
                }
            } catch (\Exception $e) {
                // Continue if one booking fails
                continue;
            }
        }

        return back()->with('success', 'Status pembayaran berhasil disinkronkan dengan Midtrans.');
    }
}
