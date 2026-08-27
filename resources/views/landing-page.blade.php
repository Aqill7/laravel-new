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
    <nav class="bg-white px-6 py-4 border-b border-gray-100 flex items-center justify-between sticky top-0 z-50">
        <div class="text-xl font-bold text-green-800 tracking-tight">
            Twenty Nine Adventure
        </div>
        <div class="hidden md:flex space-x-8 text-sm font-medium text-gray-600">
            <a href="#" class="text-green-700 border-b-2 border-green-700 pb-1">Home</a>
            <a href="#" class="hover:text-green-700 transition">Katalog</a>
            <a href="#" class="hover:text-green-700 transition">Peraturan Sewa</a>
            <a href="#" class="hover:text-green-700 transition">Tentang Kami</a>
            <a href="#" class="hover:text-green-700 transition">Kontak</a>
        </div>
        <div>
            <a href="#" class="px-5 py-2 text-sm font-medium text-gray-600 border border-gray-300 rounded-md hover:bg-gray-50 transition">Login</a>
        </div>
    </nav>

    <!-- 2. HERO SECTION -->
    <section class="relative bg-cover bg-center h-[500px] flex items-center justify-center text-center" 
             style="background-image: url('https://images.unsplash.com/photo-1504280741562-38c17b8dfaaa?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
        <!-- Overlay untuk memudarkan background sedikit -->
        <div class="absolute inset-0 bg-white/40"></div> 
        
        <div class="relative z-10 max-w-2xl px-4">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight mb-4 shadow-sm">
                Perlengkapan Outdoor<br>Untuk Setiap Petualangan
            </h1>
            <p class="text-gray-700 font-medium mb-8">
                Sewa berbagai perlengkapan camping dan outdoor dengan harga terjangkau.
            </p>
            <div class="flex justify-center space-x-4">
                <a href="#" class="px-6 py-3 bg-green-800 text-white text-sm font-medium rounded-md hover:bg-green-900 transition">Lihat Katalog</a>
                <a href="#" class="px-6 py-3 bg-white text-gray-700 text-sm font-medium border border-gray-300 rounded-md hover:bg-gray-50 transition">Aturan Sewa</a>
            </div>
        </div>
    </section>

    <!-- 3. PILIHAN PERLENGKAPAN (Kategori) -->
    <section class="py-16 px-6 max-w-6xl mx-auto text-center">
        <h2 class="text-2xl font-bold mb-10">Pilihan Perlengkapan</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <!-- Card Kategori (Contoh diulang) -->
            <a href="#" class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition flex flex-col items-center justify-center space-y-3">
                <div class="w-8 h-8 bg-green-100 text-green-800 rounded-full flex items-center justify-center">⛺</div>
                <span class="text-sm font-medium">Tenda</span>
            </a>
            <a href="#" class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition flex flex-col items-center justify-center space-y-3">
                <div class="w-8 h-8 bg-green-100 text-green-800 rounded-full flex items-center justify-center">🎪</div>
                <span class="text-sm font-medium">Flysheet</span>
            </a>
            <a href="#" class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition flex flex-col items-center justify-center space-y-3">
                <div class="w-8 h-8 bg-green-100 text-green-800 rounded-full flex items-center justify-center">🪑</div>
                <span class="text-sm font-medium">Kursi & Meja</span>
            </a>
            <a href="#" class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition flex flex-col items-center justify-center space-y-3">
                <div class="w-8 h-8 bg-green-100 text-green-800 rounded-full flex items-center justify-center">🍳</div>
                <span class="text-sm font-medium">Cooking</span>
            </a>
            <a href="#" class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition flex flex-col items-center justify-center space-y-3">
                <div class="w-8 h-8 bg-green-100 text-green-800 rounded-full flex items-center justify-center">🛌</div>
                <span class="text-sm font-medium">Sleeping</span>
            </a>
            <a href="#" class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition flex flex-col items-center justify-center space-y-3">
                <div class="w-8 h-8 bg-green-100 text-green-800 rounded-full flex items-center justify-center">🎒</div>
                <span class="text-sm font-medium">Pakaian & Tas</span>
            </a>
            <a href="#" class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition flex flex-col items-center justify-center space-y-3">
                <div class="w-8 h-8 bg-green-100 text-green-800 rounded-full flex items-center justify-center">🔦</div>
                <span class="text-sm font-medium">Headlamp & Lampu</span>
            </a>
            <a href="#" class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition flex flex-col items-center justify-center space-y-3">
                <div class="w-8 h-8 bg-green-100 text-green-800 rounded-full flex items-center justify-center">➕</div>
                <span class="text-sm font-medium">Lainnya</span>
            </a>
        </div>
    </section>

    <!-- 4. PRODUK POPULER -->
    <section class="py-16 bg-gray-50">
        <div class="px-6 max-w-6xl mx-auto">
            <h2 class="text-2xl font-bold mb-10 text-center md:text-left">Produk Populer</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Produk 1 -->
                <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition">
                    <div class="relative h-48 bg-gray-200">
                        <img src="https://images.unsplash.com/photo-1523987355523-c7b5b0dd90a7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Tenda" class="w-full h-full object-cover">
                        <span class="absolute top-3 right-3 bg-white text-xs font-semibold px-2 py-1 rounded shadow-sm text-green-700">Tersedia</span>
                    </div>
                    <div class="p-5">
                        <p class="text-xs text-gray-500 mb-1">Tenda</p>
                        <h3 class="font-bold text-lg mb-4">Tenda 4-5P Double Layer</h3>
                        <div class="flex justify-between items-center border-t border-gray-100 pt-3">
                            <p class="text-green-800 font-bold">Rp40.000<span class="text-sm font-normal text-gray-500">/hari</span></p>
                            <a href="#" class="text-sm text-gray-600 hover:text-green-800 font-medium">Lihat Detail &rarr;</a>
                        </div>
                    </div>
                </div>

                <!-- Produk 2 -->
                <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition">
                    <div class="relative h-48 bg-gray-200">
                        <img src="https://images.unsplash.com/photo-1621360155057-04662c9bb5fc?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Matras" class="w-full h-full object-cover">
                        <span class="absolute top-3 right-3 bg-white text-xs font-semibold px-2 py-1 rounded shadow-sm text-green-700">Tersedia</span>
                    </div>
                    <div class="p-5">
                        <p class="text-xs text-gray-500 mb-1">Aksesoris</p>
                        <h3 class="font-bold text-lg mb-4">Matras</h3>
                        <div class="flex justify-between items-center border-t border-gray-100 pt-3">
                            <p class="text-green-800 font-bold">Rp5.000<span class="text-sm font-normal text-gray-500">/hari</span></p>
                            <a href="#" class="text-sm text-gray-600 hover:text-green-800 font-medium">Lihat Detail &rarr;</a>
                        </div>
                    </div>
                </div>

                <!-- Produk 3 -->
                <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition">
                    <div class="relative h-48 bg-gray-200">
                        <img src="https://images.unsplash.com/photo-1627885741364-50a7c4937213?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Sleeping Bag" class="w-full h-full object-cover">
                        <span class="absolute top-3 right-3 bg-white text-xs font-semibold px-2 py-1 rounded shadow-sm text-green-700">Tersedia</span>
                    </div>
                    <div class="p-5">
                        <p class="text-xs text-gray-500 mb-1">Sleeping</p>
                        <h3 class="font-bold text-lg mb-4">Sleeping Bag</h3>
                        <div class="flex justify-between items-center border-t border-gray-100 pt-3">
                            <p class="text-green-800 font-bold">Rp10.000<span class="text-sm font-normal text-gray-500">/hari</span></p>
                            <a href="#" class="text-sm text-gray-600 hover:text-green-800 font-medium">Lihat Detail &rarr;</a>
                        </div>
                    </div>
                </div>
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
        <a href="#" class="inline-block px-8 py-3 bg-green-800 text-white font-medium rounded-md hover:bg-green-900 transition">
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
                    <li>WhatsApp: 083840036704</li>
                    <li>Instagram: @twentynine_adv</li>
                </ul>
            </div>
            
            <div>
                <h4 class="font-semibold text-gray-800 mb-4 text-sm">Lokasi</h4>
                <p class="text-xs text-gray-500">Sidoarjo, Purbandono, Gunung Pati</p>
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

</body>
</html>