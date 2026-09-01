<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk - Twenty Nine Adventure</title>
    <!-- Tailwind CSS (Gunakan CDN untuk frontend preview, disarankan di-compile via Vite untuk production) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom Font */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        .text-brand { color: #1e4b27; }
        .bg-brand { background-color: #1e4b27; }
        .border-brand { border-color: #1e4b27; }
        
        /* Custom Date Input Icon */
        input[type="date"]::-webkit-calendar-picker-indicator {
            color: rgba(0, 0, 0, 0);
            opacity: 1;
            display: block;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 24 24" fill="none" stroke="%236b7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>') no-repeat;
            width: 20px;
            height: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body class="bg-white text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white border-b px-8 py-4 flex justify-between items-center sticky top-0 z-50">
        <div class="flex items-center gap-2">
            <button onclick="history.back()" class="mr-2 flex items-center justify-center w-8 h-8 rounded-lg hover:bg-gray-100 transition">
                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            </button>
            <!-- Placeholder Logo Removed -->
            <span class="text-xl font-bold text-brand">Twenty Nine Adventure</span>
        </div>
        <div class="hidden md:flex gap-8 text-sm font-medium text-gray-500">
            <a href="{{ route('landing') }}" class="hover:text-gray-900">Home</a>
            <a href="{{ route('katalog') }}" class="text-brand border-b-2 border-brand pb-1">Katalog</a>
            <a href="{{ route('peraturan') }}" class="hover:text-gray-900">Peraturan Sewa</a>
            <a href="{{ route('tentang') }}" class="hover:text-gray-900">Tentang Kami</a>
            <a href="{{ route('kontak') }}" class="hover:text-gray-900">Kontak</a>
        </div>
        <div class="flex items-center gap-4">
            <a href="{{ route('keranjang') }}" class="text-gray-600 hover:text-green-800 transition relative">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                @php $cartCount = count(session('keranjang', [])); @endphp
                @if($cartCount > 0)
                    <span class="absolute -top-2 -right-2 bg-red-500 text-white text-[10px] font-bold w-4 h-4 rounded-full flex items-center justify-center animate-bounce">{{ $cartCount }}</span>
                @endif
            </a>
            <a href="{{ route('admin.login') }}" class="border border-gray-300 text-sm font-medium text-gray-600 px-4 py-2 rounded hover:bg-gray-50">Login</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <!-- Breadcrumb -->
        <nav class="text-sm text-gray-500 mb-8 font-medium">
            <a href="{{ route('katalog') }}" class="hover:text-gray-900">Katalog</a>
            @if($product->category)
                <span class="mx-2">></span>
                <a href="{{ route('katalog.category', $product->category->slug) }}" class="hover:text-gray-900">{{ $product->category->name }}</a>
            @endif
            <span class="mx-2">></span>
            <span class="text-gray-900">{{ $product->name }}</span>
        </nav>

        <!-- Product Top Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
            
            <!-- Left Column: Images -->
            <div>
                <!-- Main Image -->
                <div class="w-full aspect-[4/3] bg-gray-100 rounded-2xl overflow-hidden mb-4 border shadow-sm">
                    @if($product->images->count() > 0)
                        <img id="mainImage" src="{{ asset('storage/' . $product->images->first()->image_path) }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                    @else
                        <img id="mainImage" src="https://placehold.co/800x600/e2e8f0/64748b?text=Product" alt="{{ $product->name }}" class="w-full h-full object-cover">
                    @endif
                </div>
                <!-- Thumbnails -->
                @if($product->images->count() > 0)
                    <div class="grid grid-cols-4 gap-4">
                        @foreach($product->images as $index => $img)
                            <div class="aspect-square bg-gray-100 rounded-xl overflow-hidden border-2 {{ $index === 0 ? 'border-brand' : 'border-transparent hover:border-gray-300' }} cursor-pointer transition" onclick="changeImage('{{ asset('storage/' . $img->image_path) }}', this)">
                                <img src="{{ asset('storage/' . $img->image_path) }}" alt="Thumbnail" class="w-full h-full object-cover">
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

            <script>
                function changeImage(src, element) {
                    document.getElementById('mainImage').src = src;
                    document.querySelectorAll('.grid-cols-4 > div').forEach(el => {
                        el.classList.remove('border-brand');
                        el.classList.add('border-transparent');
                    });
                    element.classList.remove('border-transparent');
                    element.classList.add('border-brand');
                }
            </script>

            <!-- Right Column: Product Info & Booking -->
            <div class="flex flex-col">
                <div class="mb-6">
                    <span class="inline-block {{ $product->stock > 0 ? 'bg-[#fdf6b2] text-[#723b13]' : 'bg-red-100 text-red-700' }} text-xs font-bold px-3 py-1 rounded-full mb-3 uppercase tracking-wide">
                        {{ $product->stock > 0 ? 'Tersedia' : 'Stok Habis' }}
                    </span>
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ $product->name }}</h1>
                    
                    <div class="flex items-baseline gap-2">
                        <span class="text-2xl font-bold text-brand">Rp{{ number_format($product->price_per_day, 0, ',', '.') }}</span>
                        <span class="text-gray-500 font-medium">/ hari</span>
                    </div>
                </div>

                <!-- Booking Form -->
                <div class="border-t pt-6">
                    <form id="product-form" action="{{ route('booking.store') }}" method="POST" class="space-y-4" onsubmit="if({{ $product->stock }} <= 0) { event.preventDefault(); openOutOfStockModal(); return false; }">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                            <input type="text" name="name" required class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-brand">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" name="email" required class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-brand">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nomor WhatsApp</label>
                            <input type="tel" name="phone" required class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-brand">
                        </div>
                        
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Sewa</label>
                                <input type="date" name="rental_date" required class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-brand">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Kembali</label>
                                <input type="date" name="return_date" required class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-brand">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Jumlah</label>
                            <div class="flex items-center gap-2">
                                <button type="button" onclick="decreaseDetailQty()" class="w-10 h-10 bg-gray-200 hover:bg-gray-300 rounded-lg font-bold text-lg">−</button>
                                <input type="number" name="quantity" id="quantity" value="1" min="1" max="{{ $product->stock }}" required class="flex-1 border border-gray-300 rounded-lg px-4 py-2 text-center text-sm focus:outline-none focus:ring-2 focus:ring-brand" readonly>
                                <button type="button" onclick="increaseDetailQty()" class="w-10 h-10 bg-gray-200 hover:bg-gray-300 rounded-lg font-bold text-lg">+</button>
                            </div>
                        </div>

                        <script>
                            const maxStock = {{ $product->stock }};
                            function increaseDetailQty() {
                                const input = document.getElementById('quantity');
                                const current = parseInt(input.value) || 1;
                                if (current < maxStock) {
                                    input.value = current + 1;
                                    input.dispatchEvent(new Event('input'));
                                }
                            }

                            function decreaseDetailQty() {
                                const input = document.getElementById('quantity');
                                if (parseInt(input.value) > 1) {
                                    input.value = parseInt(input.value) - 1;
                                    input.dispatchEvent(new Event('input'));
                                }
                            }
                        </script>

                        <div class="bg-gray-50 p-4 rounded-lg border border-gray-200 space-y-2">
                            <div class="flex justify-between text-sm text-gray-600">
                                <span>Durasi Sewa:</span>
                                <span id="duration-text" class="font-medium text-gray-800">1 Hari</span>
                            </div>
                            <div class="flex justify-between text-sm text-gray-600">
                                <span>Total Harga:</span>
                                <span id="total-price-text" class="font-bold text-brand text-base">Rp{{ number_format($product->price_per_day, 0, ',', '.') }}</span>
                            </div>
                        </div>

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const pricePerDay = {{ $product->price_per_day }};
                                const quantityInput = document.getElementById('quantity');
                                const rentalDateInput = document.querySelector('input[name="rental_date"]');
                                const returnDateInput = document.querySelector('input[name="return_date"]');
                                const durationText = document.getElementById('duration-text');
                                const totalPriceText = document.getElementById('total-price-text');

                                function calculateTotal() {
                                    const qty = parseInt(quantityInput.value) || 1;
                                    let days = 1;

                                    if (rentalDateInput.value && returnDateInput.value) {
                                        const start = new Date(rentalDateInput.value);
                                        const end = new Date(returnDateInput.value);
                                        const diffTime = end - start;
                                        const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
                                        if (diffDays > 0) {
                                            days = diffDays;
                                        }
                                    }

                                    durationText.textContent = days + ' Hari';
                                    const total = pricePerDay * qty * days;
                                    totalPriceText.textContent = 'Rp' + total.toLocaleString('id-ID');
                                    // Simpan total ke hidden field untuk dikirim ke keranjang
                                    const totalInput = document.createElement('input');
                                    totalInput.type = 'hidden';
                                    totalInput.name = 'total_price';
                                    totalInput.value = total;
                                    document.getElementById('product-form').appendChild(totalInput);
                                }

                                quantityInput.addEventListener('input', calculateTotal);
                                rentalDateInput.addEventListener('change', calculateTotal);
                                returnDateInput.addEventListener('change', calculateTotal);
                            });
                        </script>

                        <div class="flex gap-4">
                            @if($product->stock > 0)
                                <button type="button" onclick="addToCart()" class="w-1/2 border border-brand text-brand font-semibold py-3 rounded-lg hover:bg-green-50 transition">Tambah ke Keranjang</button>
                                <button type="submit" formaction="{{ route('booking.store') }}" formmethod="POST" class="w-1/2 bg-brand text-white font-semibold py-3 rounded-lg hover:bg-green-900 transition">Pesan Sekarang</button>
                            @else
                                <button type="button" onclick="openOutOfStockModal()" class="w-full bg-gray-300 text-gray-700 font-semibold py-3 rounded-lg cursor-not-allowed" disabled>Stok Habis (Tidak Bisa Disewa)</button>
                            @endif
                        </div>

                        <script>
                            function addToCart() {
                                if ({{ $product->stock }} <= 0) {
                                    openOutOfStockModal();
                                    return;
                                }
                                const form = document.getElementById('product-form');
                                const action = "{{ route('keranjang.tambah', $product->id) }}";
                                const method = "POST";
                                
                                // Hapus required dari field booking agar bisa submit
                                document.querySelectorAll('#product-form input').forEach(el => el.removeAttribute('required'));
                                
                                form.action = action;
                                form.submit();
                            }
                        </script>
                    </form>
                </div>
            </div>
        </div>

        <!-- Out of Stock Modal -->
        <div id="outOfStockModal" class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center hidden">
            <div class="bg-white rounded-xl p-6 max-w-sm w-full mx-4 shadow-2xl text-center">
                <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Stok Habis</h3>
                <p class="text-sm text-gray-600 mb-4">Produk "{{ $product->name }}" sudah habis dan tidak bisa disewa.</p>
                <button type="button" onclick="closeOutOfStockModal()" class="px-4 py-2 bg-brand text-white rounded-lg text-sm font-semibold hover:bg-green-900">Mengerti</button>
            </div>
        </div>

        <script>
            function openOutOfStockModal() {
                document.getElementById('outOfStockModal').classList.remove('hidden');
            }
            function closeOutOfStockModal() {
                document.getElementById('outOfStockModal').classList.add('hidden');
            }
        </script>

        <!-- Middle Section: Tabs & Info -->
        <div class="mb-16">
            <!-- Tabs Navigation -->
            <div class="flex gap-8 border-b border-gray-200">
                <span class="pb-3 text-brand font-semibold border-b-2 border-brand text-sm">Deskripsi</span>
                <a href="{{ route('denda') }}" class="pb-3 text-gray-500 font-medium hover:text-gray-900 text-sm transition">Ketentuan Sewa</a>
            </div>
            
            <!-- Tab Content -->
            <div class="py-6 text-gray-600 text-sm leading-relaxed max-w-4xl">
                {!! nl2br(e($product->description)) !!}
            </div>
        </div>

        <!-- Bottom Section: Related Products -->
        <div class="mb-8">
            <h2 class="text-xl font-bold text-gray-900 mb-6">Produk Terkait</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                @foreach($relatedProducts as $relProduct)
                <div class="bg-white border rounded-xl overflow-hidden shadow-sm hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="relative h-44 bg-gray-200">
                            @if($relProduct->images->count() > 0)
                                <img src="{{ asset('storage/' . $relProduct->images->first()->image_path) }}" alt="{{ $relProduct->name }}" class="w-full h-full object-cover">
                            @else
                                <img src="https://placehold.co/400x300/e2e8f0/64748b?text=Product" alt="{{ $relProduct->name }}" class="w-full h-full object-cover">
                            @endif
                            <span class="absolute top-2 right-2 bg-white/90 text-gray-700 text-xs font-semibold px-2 py-1 rounded">{{ $relProduct->category->name ?? '' }}</span>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-gray-800 text-sm mb-1">{{ $relProduct->name }}</h3>
                        </div>
                    </div>
                    <div class="p-4 pt-0 flex justify-between items-end">
                        <div>
                            <span class="text-brand font-bold text-sm">Rp{{ number_format($relProduct->price_per_day, 0, ',', '.') }}</span><span class="text-xs text-gray-500">/hari</span>
                        </div>
                        <a href="{{ route('produk.detail', $relProduct->slug) }}" class="border border-gray-400 text-gray-700 text-xs font-medium px-3 py-1.5 rounded hover:bg-gray-50">Lihat Detail</a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </main>

    <!-- Footer -->
    <footer class="bg-gray-100 text-gray-600 py-10 mt-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
            <div>
                <h2 class="text-xl font-bold text-brand mb-1">Twenty Nine<br>Adventure</h2>
                <p class="text-xs mt-2">© 2026 Twenty Nine Adventure. All rights reserved.</p>
            </div>
            
            <div class="flex flex-wrap gap-x-8 gap-y-4 text-xs font-medium">
                <div>
                    <span class="block text-gray-400 mb-1">WhatsApp</span>
                    <span>085640058704</span>
                </div>
                <div>
                    <span class="block text-gray-400 mb-1">Instagram</span>
                    <span>@twentynine_adv</span>
                </div>
                <div>
                    <span class="block text-gray-400 mb-1">Address</span>
                    <span>Gang Durian V, RT/RW 01/01 Pakintelan, Gunung Pati, Semarang, Jawa Tengah</span>
                </div>
                <div class="flex flex-col gap-2">
                    <a href="{{ route('peraturan') }}" class="hover:text-gray-900">Privacy Policy</a>
                    <a href="{{ route('peraturan') }}" class="hover:text-gray-900">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>