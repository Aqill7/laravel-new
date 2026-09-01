<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twenty Nine Adventure - Landing Page</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="text-gray-800 bg-white antialiased">

    <!-- 1. NAVBAR -->
    <nav class="bg-white px-6 py-4 border-b border-gray-100 sticky top-0 z-50">
        <div class="flex items-center justify-between max-w-7xl mx-auto">
            <div class="text-xl font-bold text-green-800 tracking-tight">
                Twenty Nine Adventure
            </div>
            
            <!-- Desktop Nav -->
            <div class="hidden md:flex space-x-8 text-sm font-medium text-gray-600">
                <a href="{{ route('landing') }}" class="text-green-700 border-b-2 border-green-700 pb-1">Home</a>
                <a href="{{ route('katalog') }}" class="hover:text-green-700 transition">Katalog</a>
                <a href="{{ route('peraturan') }}" class="hover:text-green-700 transition">Peraturan Sewa</a>
                <a href="{{ route('tentang') }}" class="hover:text-green-700 transition">Tentang Kami</a>
                <a href="{{ route('kontak') }}" class="hover:text-green-700 transition">Kontak</a>
            </div>

            <div class="flex items-center gap-4">
                <a href="{{ route('keranjang') }}" class="text-gray-600 hover:text-green-800 transition relative">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    @php $cartCount = count(session('keranjang', [])); @endphp
                    @if($cartCount > 0)
                        <span class="absolute -top-2 -right-2 bg-red-500 text-white text-[10px] font-bold w-4 h-4 rounded-full flex items-center justify-center animate-bounce">{{ $cartCount }}</span>
                    @endif
                </a>
                <a href="{{ route('admin.login') }}" class="hidden sm:inline-block px-5 py-2 text-sm font-medium text-gray-600 border border-gray-300 rounded-md hover:bg-gray-50 transition">Login</a>
                
                <!-- Mobile Hamburger Button -->
                <button type="button" onclick="document.getElementById('mobileMenu').classList.toggle('hidden')" class="md:hidden text-gray-600 hover:text-gray-900 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobileMenu" class="hidden md:hidden mt-4 pt-4 border-t border-gray-100 flex flex-col space-y-3 text-sm font-medium text-gray-600">
            <a href="{{ route('landing') }}" class="text-green-700 font-semibold">Home</a>
            <a href="{{ route('katalog') }}" class="hover:text-green-700 transition">Katalog</a>
            <a href="{{ route('peraturan') }}" class="hover:text-green-700 transition">Peraturan Sewa</a>
            <a href="{{ route('tentang') }}" class="hover:text-green-700 transition">Tentang Kami</a>
            <a href="{{ route('kontak') }}" class="hover:text-green-700 transition">Kontak</a>
            <a href="{{ route('admin.login') }}" class="pt-2 text-green-800 font-semibold">Login / Admin</a>
        </div>
    </nav>

    <!-- 2. HERO SECTION -->
    <section class="relative bg-cover bg-center h-[500px] h-[60vh] min-h-[320px] flex items-center justify-center text-center" 
             style="background-image: url('{{ asset('background-katalog.jpg') }}');">
        <!-- Overlay untuk memudarkan background sedikit agar tulisan terbaca jelas -->
        <div class="absolute inset-0 bg-black/50"></div> 
        
        <div class="relative z-10 max-w-2xl px-4">
            <h1 class="text-4xl md:text-5xl font-bold text-white leading-tight mb-4 shadow-sm">
                Perlengkapan Outdoor<br>Untuk Setiap Petualangan
            </h1>
            <p class="text-gray-200 font-medium mb-8">
                Sewa berbagai perlengkapan camping dan outdoor dengan harga terjangkau.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-3 sm:space-x-4">
                <a href="{{ route('katalog') }}" class="px-6 py-3 bg-green-800 text-white text-sm font-medium rounded-md hover:bg-green-900 transition">Lihat Katalog</a>
                <a href="{{ route('peraturan') }}" class="px-6 py-3 bg-white text-gray-700 text-sm font-medium border border-gray-300 rounded-md hover:bg-gray-50 transition">Aturan Sewa</a>
            </div>
        </div>
    </section>

    <!-- 3. PILIHAN PERLENGKAPAN (Kategori) -->
    <section class="py-16 px-6 max-w-6xl mx-auto text-center">
        <h2 class="text-2xl font-bold mb-10">Pilihan Perlengkapan</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach($categories as $category)
            <a href="{{ route('katalog.category', $category->slug) }}" class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition flex flex-col items-center justify-center space-y-3">
                <div class="w-8 h-8 bg-green-100 text-green-800 rounded-full flex items-center justify-center">⛺</div>
                <span class="text-sm font-medium">{{ $category->name }}</span>
            </a>
            @endforeach
        </div>
    </section>

    <!-- 4. PRODUK POPULER -->
    <section class="py-16 bg-gray-50">
        <div class="px-6 max-w-6xl mx-auto">
            <h2 class="text-2xl font-bold mb-10 text-center md:text-left">Produk Populer</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($popularProducts as $product)
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
                            <span class="text-green-800 font-bold text-sm">Rp{{ number_format($product->price_per_day, 0, ',', '.') }}<span class="text-xs text-gray-500 font-normal">/hari</span></span>
                            <span class="text-xs {{ $product->stock > 0 ? 'text-gray-600' : 'text-red-600 font-bold' }}">Stok: {{ $product->stock }}</span>
                        </div>
                        <div class="flex gap-2">
                            <a href="{{ route('produk.detail', $product->slug) }}" class="flex-1 text-center border border-gray-400 text-gray-700 text-xs font-medium py-1.5 rounded hover:bg-gray-50">Detail</a>
                            @if($product->stock > 0)
                                <button type="button" onclick="openCartModal({{ $product->id }}, '{{ $product->name }}', {{ $product->stock }})" class="flex-1 bg-green-800 text-white text-xs font-medium py-1.5 rounded hover:bg-green-900 transition">+ Keranjang</button>
                            @else
                                <button type="button" class="flex-1 bg-gray-300 text-gray-600 text-xs font-medium py-1.5 rounded cursor-not-allowed">Habis</button>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 5. KENAPA MEMILIH TWENTY NINE -->
    <section class="py-16 px-6 max-w-6xl mx-auto text-center">
        <h2 class="text-2xl font-bold mb-10">Kenapa Memilih TWENTY NINE?</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="border border-gray-200 rounded-lg p-6 hover:border-green-800 transition">
                <div class="text-2xl mb-3">💰</div>
                <h3 class="font-bold text-sm mb-2">Harga Terjangkau</h3>
                <p class="text-xs text-gray-500">Sewa alat petualang tanpa menguras kantong.</p>
            </div>
            <div class="border border-gray-200 rounded-lg p-6 hover:border-green-800 transition">
                <div class="text-2xl mb-3">🛠️</div>
                <h3 class="font-bold text-sm mb-2">Peralatan Terawat</h3>
                <p class="text-xs text-gray-500">Kualitas barang selalu dicek dan dibersihkan.</p>
            </div>
            <div class="border border-gray-200 rounded-lg p-6 hover:border-green-800 transition">
                <div class="text-2xl mb-3">📦</div>
                <h3 class="font-bold text-sm mb-2">Banyak Pilihan</h3>
                <p class="text-xs text-gray-500">Dari tenda hingga printilan, semua ada.</p>
            </div>
            <div class="border border-gray-200 rounded-lg p-6 hover:border-green-800 transition">
                <div class="text-2xl mb-3">🚚</div>
                <h3 class="font-bold text-sm mb-2">Siap Antar</h3>
                <p class="text-xs text-gray-500">Layanan antar jemput untuk kemudahan Anda.</p>
            </div>
        </div>
    </section>

    <!-- 6. CARA SEWA -->
    <section class="py-16 bg-gray-50 px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-2xl font-bold mb-12">Cara Sewa</h2>
            
            <div class="relative flex flex-col md:flex-row justify-between items-center text-center">
                <!-- Garis Penghubung (Hanya tampil di desktop) -->
                <div class="hidden md:block absolute top-6 left-0 right-0 h-px bg-gray-300 z-0 w-3/4 mx-auto"></div>

                <div class="relative z-10 flex flex-col items-center mb-6 md:mb-0 bg-gray-50 px-4">
                    <div class="w-12 h-12 rounded-full bg-green-800 text-white flex items-center justify-center font-bold mb-4 shadow-md">01</div>
                    <span class="text-sm font-medium">Pilih Peralatan</span>
                </div>
                <div class="relative z-10 flex flex-col items-center mb-6 md:mb-0 bg-gray-50 px-4">
                    <div class="w-12 h-12 rounded-full bg-green-800 text-white flex items-center justify-center font-bold mb-4 shadow-md">02</div>
                    <span class="text-sm font-medium">Tentukan Tanggal</span>
                </div>
                <div class="relative z-10 flex flex-col items-center mb-6 md:mb-0 bg-gray-50 px-4">
                    <div class="w-12 h-12 rounded-full bg-green-800 text-white flex items-center justify-center font-bold mb-4 shadow-md">03</div>
                    <span class="text-sm font-medium">Konfirmasi Pesanan</span>
                </div>
                <div class="relative z-10 flex flex-col items-center bg-gray-50 px-4">
                    <div class="w-12 h-12 rounded-full bg-green-800 text-white flex items-center justify-center font-bold mb-4 shadow-md">04</div>
                    <span class="text-sm font-medium">Mulai Petualangan</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. CTA (Call To Action) -->
    <section class="py-20 text-center px-6">
        <h2 class="text-3xl font-bold mb-6">Siap Untuk Petualangan Berikutnya?</h2>
        <a href="{{ route('katalog') }}" class="inline-block px-8 py-3 bg-green-800 text-white font-medium rounded-md hover:bg-green-900 transition">
            Lihat Semua Peralatan
        </a>
    </section>

    <!-- 8. FOOTER -->
    <footer class="bg-gray-100 py-12 border-t border-gray-200">
        <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="col-span-1">
                <div class="text-xl font-bold text-green-800 mb-4">Twenty Nine<br>Adventure</div>
                <p class="text-xs text-gray-500 leading-relaxed mb-4">
                    Penyewaan Peralatan Outdoor Terbaik dan Terpercaya.
                </p>
                <p class="text-xs text-gray-400">
                    &copy; 2024 Twenty Nine Adventure. All rights reserved.
                </p>
            </div>
            
            <div>
                <h4 class="font-semibold text-gray-800 mb-4 text-sm">Kontak</h4>
                <ul class="text-xs text-gray-500 space-y-2">
                    <li>WhatsApp: 085640058704</li>
                    <li>Instagram: @twentynine_adv</li>
                </ul>
            </div>
            
            <div>
                <h4 class="font-semibold text-gray-800 mb-4 text-sm">Lokasi</h4>
                <p class="text-xs text-gray-500">Gang Durian V, RT/RW 01/01 Pakintelan, Gunung Pati, Semarang, Jawa Tengah</p>
            </div>
            
            <div>
                <h4 class="font-semibold text-gray-800 mb-4 text-sm">Legal</h4>
                <ul class="text-xs text-gray-500 space-y-2">
                    <li><a href="#" class="hover:text-green-700">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-green-700">Terms of Service</a></li>
                </ul>
            </div>
        </div>
    </footer>

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
                    <button type="submit" class="px-4 py-2 bg-green-800 text-white rounded-lg text-sm font-semibold hover:bg-green-900">Tambah</button>
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

        function openCartModal(productId, productName, stock) {
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
                closeCartModal();
            });
        });
    </script>