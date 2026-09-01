<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog - Twenty Nine Adventure</title>
    <!-- Tailwind CSS (Gunakan CDN untuk frontend preview, disarankan di-compile via Vite untuk production) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom Font */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        .text-brand { color: #1e4b27; } /* Warna hijau gelap mirip referensi */
        .bg-brand { background-color: #1e4b27; }
        @keyframes bounce-scale {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.25); }
        }
        .animate-cart-bounce {
            animation: bounce-scale 0.5s ease-in-out;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white border-b px-8 py-4 flex justify-between items-center sticky top-0 z-50">
        <div class="flex items-center gap-2">
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
            <a href="{{ route('admin.login') }}" class="text-sm font-medium text-gray-600 hover:text-gray-900">Login</a>
        </div>
    </nav>

    <!-- Header Section -->
    <header class="text-center py-12 px-4 relative max-w-7xl mx-auto">
        <div class="absolute left-4 top-4">
            <button onclick="history.back()" class="flex items-center gap-1.5 text-sm font-medium text-gray-600 hover:text-brand bg-white border border-gray-200 px-3 py-1.5 rounded-lg shadow-sm transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Kembali
            </button>
        </div>
        <h1 class="text-4xl md:text-5xl font-bold text-brand mb-4">Perlengkapan Outdoor</h1>
        <p class="text-gray-500">Temukan perlengkapan yang kamu butuhkan untuk petualanganmu.</p>
        
        <!-- Search Bar -->
        <form action="{{ route('katalog') }}" method="GET" class="mt-8 max-w-lg mx-auto relative">
            <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Cari perlengkapan..." 
                   class="w-full border border-gray-300 rounded-lg py-3 px-10 focus:outline-none focus:ring-1 focus:ring-brand shadow-sm">
            <svg class="w-5 h-5 absolute left-3 top-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </form>

        <!-- Filter / Categories -->
        <div class="flex flex-wrap justify-center gap-3 mt-8">
            <a href="{{ route('katalog') }}" class="{{ !isset($categoryId) ? 'bg-brand text-white' : 'border border-gray-300 text-gray-600 bg-white hover:bg-gray-50' }} px-5 py-1.5 rounded-full text-sm font-medium">Semua</a>
            @foreach($categories as $cat)
                <a href="{{ route('katalog.category', $cat->slug) }}" class="{{ (isset($categoryId) && $categoryId == $cat->id) ? 'bg-brand text-white' : 'border border-gray-300 text-gray-600 bg-white hover:bg-gray-50' }} px-5 py-1.5 rounded-full text-sm font-medium">{{ $cat->name }}</a>
            @endforeach
        </div>
    </header>

    <!-- Product Grid -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-20">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            @foreach($products as $product)
            <div class="bg-white border rounded-xl overflow-hidden shadow-sm hover:shadow-md transition flex flex-col justify-between">
                <div>
                    <div class="relative h-48 bg-gray-200">
                        @if($product->images->count() > 0)
                            <img src="{{ asset('storage/' . $product->images->first()->image_path) }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                        @else
                            <img src="https://placehold.co/400x300/e2e8f0/64748b?text=Product" alt="{{ $product->name }}" class="w-full h-full object-cover">
                        @endif
                        <span class="absolute top-2 right-2 {{ $product->stock > 0 ? 'bg-white/90 text-gray-700' : 'bg-red-500 text-white' }} text-xs font-semibold px-2 py-1 rounded">
                            {{ $product->stock > 0 ? ($product->category->name ?? '') : 'Stok Habis' }}
                        </span>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800">{{ $product->name }}</h3>
                    </div>
                </div>
                <div class="p-4 pt-0 flex flex-col gap-2">
                    <div class="flex justify-between items-center">
                        <span class="text-brand font-bold text-sm">Rp{{ number_format($product->price_per_day, 0, ',', '.') }}<span class="text-xs text-gray-500 font-normal">/hari</span></span>
                        <span class="text-xs {{ $product->stock > 0 ? 'text-gray-600' : 'text-red-600 font-bold' }}">Stok: {{ $product->stock }}</span>
                    </div>
                    <div class="flex gap-2">
                        <a href="{{ route('produk.detail', $product->slug) }}" class="flex-1 text-center border border-gray-400 text-gray-700 text-xs font-medium py-1.5 rounded hover:bg-gray-50">Detail</a>
                        @if($product->stock > 0)
                            <button type="button" onclick="openCartModal({{ $product->id }}, '{{ $product->name }}', {{ $product->stock }})" class="flex-1 bg-brand text-white text-xs font-medium py-1.5 rounded hover:bg-green-900 transition">+ Keranjang</button>
                        @else
                            <button type="button" onclick="openOutOfStockModal('{{ $product->name }}')" class="flex-1 bg-gray-300 text-gray-600 text-xs font-medium py-1.5 rounded hover:bg-gray-400 transition">Habis</button>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </main>

    <!-- Cart Modal -->
    <div id="cartModal" class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center hidden opacity-0 transition-opacity duration-300">
        <div class="bg-white rounded-xl p-6 max-w-sm w-full mx-4 shadow-2xl transform scale-95 transition-transform duration-300">
            <h3 id="modalProductName" class="text-lg font-bold text-gray-900 mb-4">Tambah ke Keranjang</h3>
            <form id="cartForm" method="POST">
                @csrf
                <label class="block text-sm font-medium mb-2">Jumlah</label>
                <div class="flex items-center gap-2 mb-6">
                    <button type="button" onclick="decreaseQty()" class="w-10 h-10 bg-gray-200 hover:bg-gray-300 rounded-lg font-bold text-lg">−</button>
                    <input type="number" id="qtyInput" name="quantity" value="1" min="1" max="1" class="flex-1 border rounded-lg px-4 py-2 text-center" readonly>
                    <button type="button" onclick="increaseQty()" class="w-10 h-10 bg-gray-200 hover:bg-gray-300 rounded-lg font-bold text-lg">+</button>
                </div>
                <div class="flex justify-end gap-3">
                    <button type="button" onclick="closeCartModal()" class="px-4 py-2 border rounded-lg text-sm text-gray-600 hover:bg-gray-50">Batal</button>
                    <button type="submit" class="px-4 py-2 bg-brand text-white rounded-lg text-sm font-semibold hover:bg-green-900">Tambah</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function increaseQty() {
            const input = document.getElementById('qtyInput');
            const max = parseInt(input.getAttribute('max'));
            if (parseInt(input.value) < max) {
                input.value = parseInt(input.value) + 1;
            }
        }

        function decreaseQty() {
            const input = document.getElementById('qtyInput');
            if (parseInt(input.value) > 1) {
                input.value = parseInt(input.value) - 1;
            }
        }

        let currentStock = 1;

        function openCartModal(productId, productName, stock) {
            if (stock <= 0) {
                closeCartModal();
                openOutOfStockModal(productName);
                return;
            }
            currentStock = stock;
            const modal = document.getElementById('cartModal');
            const form = document.getElementById('cartForm');
            form.action = '{{ route('keranjang.tambah', ':id') }}'.replace(':id', productId);
            form.querySelector('#qtyInput').value = 1;
            form.querySelector('#qtyInput').max = stock;
            document.getElementById('modalProductName').textContent = 'Tambah "' + productName + '" ke Keranjang';
            
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modal.querySelector('div').classList.remove('scale-95');
            }, 10);
        }

        function closeCartModal() {
            const modal = document.getElementById('cartModal');
            modal.classList.add('opacity-0');
            modal.querySelector('div').classList.add('scale-95');
            setTimeout(() => modal.classList.add('hidden'), 300);
        }

        document.getElementById('cartForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            
            fetch(this.action, {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                let badge = document.querySelector('.animate-bounce');
                let cartIconParent = document.querySelector('a[href="{{ route('keranjang') }}"]');
                
                if (!badge) {
                    badge = document.createElement('span');
                    badge.className = 'absolute -top-2 -right-2 bg-red-500 text-white text-[10px] font-bold w-4 h-4 rounded-full flex items-center justify-center animate-bounce';
                    cartIconParent.appendChild(badge);
                }
                
                badge.textContent = data.count;
                badge.classList.remove('animate-bounce');
                void badge.offsetWidth;
                badge.classList.add('animate-cart-bounce');
                
                let icon = cartIconParent.querySelector('svg');
                icon.classList.add('animate-cart-bounce');
                setTimeout(() => icon.classList.remove('animate-cart-bounce'), 500);

                closeCartModal();
            });
        });
    </script>

    <!-- Out of Stock Modal -->
    <div id="outOfStockModal" class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-xl p-6 max-w-sm w-full mx-4 shadow-2xl text-center">
            <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <h3 class="text-lg font-bold text-gray-900 mb-2">Stok Habis</h3>
            <p id="outOfStockProductName" class="text-sm text-gray-600 mb-4">Produk yang Anda pilih belum tersedia.</p>
            <button type="button" onclick="closeOutOfStockModal()" class="px-4 py-2 bg-brand text-white rounded-lg text-sm font-semibold hover:bg-green-900">Mengerti</button>
        </div>
    </div>

    <script>
        function openOutOfStockModal(productName) {
            if (productName) {
                document.getElementById('outOfStockProductName').textContent = '"' + productName + '" sedang tidak tersedia. Stok sedang habis.';
            }
            document.getElementById('outOfStockModal').classList.remove('hidden');
        }

        function closeOutOfStockModal() {
            document.getElementById('outOfStockModal').classList.add('hidden');
        }
    </script>

</body>
</html>