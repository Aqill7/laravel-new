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
            <!-- Placeholder Logo -->
            <div class="w-8 h-8 bg-gray-200 rounded flex items-center justify-center font-bold text-xs">Logo</div>
            <span class="text-xl font-bold text-brand">Twenty Nine Adventure</span>
        </div>
        <div class="hidden md:flex gap-8 text-sm font-medium text-gray-500">
            <a href="#" class="hover:text-gray-900">Home</a>
            <a href="#" class="text-brand border-b-2 border-brand pb-1">Katalog</a>
            <a href="#" class="hover:text-gray-900">Peraturan Sewa</a>
            <a href="#" class="hover:text-gray-900">Tentang Kami</a>
            <a href="#" class="hover:text-gray-900">Kontak</a>
        </div>
        <div>
            <a href="#" class="border border-gray-300 text-sm font-medium text-gray-600 px-4 py-2 rounded hover:bg-gray-50">Login</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <!-- Breadcrumb -->
        <nav class="text-sm text-gray-500 mb-8 font-medium">
            <a href="#" class="hover:text-gray-900">Katalog</a>
            <span class="mx-2">></span>
            <a href="#" class="hover:text-gray-900">Tenda</a>
            <span class="mx-2">></span>
            <span class="text-gray-900">Tenda 4-5P Double Layer</span>
        </nav>

        <!-- Product Top Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
            
            <!-- Left Column: Images -->
            <div>
                <!-- Main Image -->
                <div class="w-full aspect-[4/3] bg-gray-100 rounded-2xl overflow-hidden mb-4 border shadow-sm">
                    <img src="https://placehold.co/800x600/e2e8f0/64748b?text=Tenda+4-5P+Utama" alt="Tenda 4-5P Double Layer" class="w-full h-full object-cover">
                </div>
                <!-- Thumbnails -->
                <div class="grid grid-cols-4 gap-4">
                    <div class="aspect-square bg-gray-100 rounded-xl overflow-hidden border-2 border-brand cursor-pointer">
                        <img src="https://placehold.co/200x200/e2e8f0/64748b?text=Thumb+1" alt="Thumbnail 1" class="w-full h-full object-cover">
                    </div>
                    <div class="aspect-square bg-gray-100 rounded-xl overflow-hidden border-2 border-transparent hover:border-gray-300 cursor-pointer transition">
                        <img src="https://placehold.co/200x200/e2e8f0/64748b?text=Thumb+2" alt="Thumbnail 2" class="w-full h-full object-cover">
                    </div>
                    <div class="aspect-square bg-gray-100 rounded-xl overflow-hidden border-2 border-transparent hover:border-gray-300 cursor-pointer transition">
                        <img src="https://placehold.co/200x200/e2e8f0/64748b?text=Thumb+3" alt="Thumbnail 3" class="w-full h-full object-cover">
                    </div>
                    <div class="aspect-square bg-gray-100 rounded-xl overflow-hidden border-2 border-transparent hover:border-gray-300 cursor-pointer transition">
                        <img src="https://placehold.co/200x200/e2e8f0/64748b?text=Thumb+4" alt="Thumbnail 4" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            <!-- Right Column: Product Info & Booking -->
            <div class="flex flex-col">
                <div class="mb-6">
                    <span class="inline-block bg-[#fdf6b2] text-[#723b13] text-xs font-bold px-3 py-1 rounded-full mb-3 uppercase tracking-wide">Tersedia</span>
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">Tenda 4-5P Double Layer</h1>
                    <div class="flex items-baseline gap-2">
                        <span class="text-2xl font-bold text-brand">Rp40.000</span>
                        <span class="text-gray-500 font-medium">/ hari</span>
                    </div>
                    <p class="text-gray-600 mt-4 leading-relaxed text-sm">
                        Tenda dome kokoh dengan lapisan ganda (double layer) yang dirancang untuk menghadapi cuaca pegunungan. Kapasitas luas, ideal untuk rombongan kecil atau keluarga.
                    </p>
                </div>

                <!-- Booking Form Box -->
                <div class="bg-[#f9fafb] border border-gray-200 rounded-2xl p-6 mt-auto shadow-sm">
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <!-- Tanggal Mulai -->
                        <div>
                            <label class="block text-xs font-semibold text-gray-700 mb-1.5">Tanggal Mulai</label>
                            <input type="date" class="w-full border border-gray-300 rounded-lg px-3 py-2.5 text-sm text-gray-700 focus:outline-none focus:ring-1 focus:ring-brand bg-white">
                        </div>
                        <!-- Tanggal Selesai -->
                        <div>
                            <label class="block text-xs font-semibold text-gray-700 mb-1.5">Tanggal Selesai</label>
                            <input type="date" class="w-full border border-gray-300 rounded-lg px-3 py-2.5 text-sm text-gray-700 focus:outline-none focus:ring-1 focus:ring-brand bg-white">
                        </div>
                    </div>
                    
                    <!-- Jumlah -->
                    <div class="mb-6">
                        <label class="block text-xs font-semibold text-gray-700 mb-1.5">Jumlah</label>
                        <div class="flex items-center w-32 border border-gray-300 rounded-lg bg-white overflow-hidden">
                            <button class="px-3 py-2 text-gray-500 hover:bg-gray-100 w-full text-center transition">-</button>
                            <input type="text" value="1" class="w-full text-center text-sm font-medium border-x border-gray-300 py-2 outline-none" readonly>
                            <button class="px-3 py-2 text-gray-500 hover:bg-gray-100 w-full text-center transition">+</button>
                        </div>
                    </div>

                    <!-- Estimasi Total -->
                    <div class="flex justify-between items-center border-t border-gray-200 pt-4 mb-6">
                        <span class="text-sm font-medium text-gray-600">Estimasi Total (1 Hari):</span>
                        <span class="text-lg font-bold text-gray-900">Rp40.000</span>
                    </div>

                    <!-- Action Buttons -->
                    <div class="space-y-3">
                        <button class="w-full bg-brand text-white font-semibold py-3 rounded-lg hover:bg-[#15361c] transition shadow-sm">
                            Pesan Sekarang
                        </button>
                        <button class="w-full bg-white border border-gray-300 text-gray-700 font-semibold py-3 rounded-lg flex items-center justify-center gap-2 hover:bg-gray-50 transition shadow-sm">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                            Tambah ke Booking
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Middle Section: Tabs & Info -->
        <div class="mb-16">
            <!-- Tabs Navigation -->
            <div class="flex gap-8 border-b border-gray-200">
                <button class="pb-3 text-brand font-semibold border-b-2 border-brand text-sm">Deskripsi</button>
                <button class="pb-3 text-gray-500 font-medium hover:text-gray-900 text-sm transition">Spesifikasi</button>
                <button class="pb-3 text-gray-500 font-medium hover:text-gray-900 text-sm transition">Isi Paket</button>
                <button class="pb-3 text-gray-500 font-medium hover:text-gray-900 text-sm transition">Ketentuan Sewa</button>
            </div>
            
            <!-- Tab Content -->
            <div class="py-6 text-gray-600 text-sm leading-relaxed max-w-4xl">
                <p class="mb-4">
                    Tenda kapasitas 4 hingga 5 orang dengan konstruksi double layer (lapisan dalam dan luar) yang memberikan perlindungan ekstra terhadap hujan deras dan mencegah kondensasi di dalam tenda. Sangat direkomendasikan untuk pendakian gunung di Indonesia yang memiliki cuaca tropis basah.
                </p>
                <p>
                    Dilengkapi dengan frame fiberglass yang lentur namun kuat menahan terpaan angin. Bagian teras (vestibule) cukup luas untuk menyimpan carrier atau perlengkapan masak agar terhindar dari hujan.
                </p>
            </div>
        </div>

        <!-- Bottom Section: Related Products -->
        <div class="mb-8">
            <h2 class="text-xl font-bold text-gray-900 mb-6">Produk Terkait</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Related Card 1 -->
                <div class="bg-white border rounded-xl overflow-hidden shadow-sm hover:shadow-md transition flex flex-col">
                    <div class="relative h-44 bg-gray-200">
                        <img src="https://placehold.co/400x300/e2e8f0/64748b?text=Tenda+2P" class="w-full h-full object-cover">
                        <span class="absolute top-2 left-2 bg-[#fdf6b2] text-[#723b13] text-[10px] font-bold px-2 py-0.5 rounded uppercase">Tersedia</span>
                    </div>
                    <div class="p-4 flex flex-col justify-between flex-grow">
                        <div>
                            <p class="text-xs text-gray-500 mb-1">Tenda</p>
                            <h3 class="font-bold text-gray-800 text-sm mb-2">Tenda 2P Double Layer</h3>
                        </div>
                        <div class="mt-2">
                            <span class="text-brand font-bold text-sm">Rp25.000</span><span class="text-xs text-gray-500">/hari</span>
                        </div>
                    </div>
                </div>

                <!-- Related Card 2 -->
                <div class="bg-white border rounded-xl overflow-hidden shadow-sm hover:shadow-md transition flex flex-col">
                    <div class="relative h-44 bg-gray-200">
                        <img src="https://placehold.co/400x300/e2e8f0/64748b?text=Sleeping+Bag" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4 flex flex-col justify-between flex-grow">
                        <div>
                            <p class="text-xs text-gray-500 mb-1">Tidur</p>
                            <h3 class="font-bold text-gray-800 text-sm mb-2">Sleeping Bag Polar Bulu</h3>
                        </div>
                        <div class="mt-2">
                            <span class="text-brand font-bold text-sm">Rp10.000</span><span class="text-xs text-gray-500">/hari</span>
                        </div>
                    </div>
                </div>

                <!-- Related Card 3 -->
                <div class="bg-white border rounded-xl overflow-hidden shadow-sm hover:shadow-md transition flex flex-col">
                    <div class="relative h-44 bg-gray-200">
                        <img src="https://placehold.co/400x300/e2e8f0/64748b?text=Matras" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4 flex flex-col justify-between flex-grow">
                        <div>
                            <p class="text-xs text-gray-500 mb-1">Tidur</p>
                            <h3 class="font-bold text-gray-800 text-sm mb-2">Matras Spon</h3>
                        </div>
                        <div class="mt-2">
                            <span class="text-brand font-bold text-sm">Rp5.000</span><span class="text-xs text-gray-500">/hari</span>
                        </div>
                    </div>
                </div>

                <!-- Related Card 4 -->
                <div class="bg-white border rounded-xl overflow-hidden shadow-sm hover:shadow-md transition flex flex-col">
                    <div class="relative h-44 bg-gray-200">
                        <img src="https://placehold.co/400x300/e2e8f0/64748b?text=Nesting+Set" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4 flex flex-col justify-between flex-grow">
                        <div>
                            <p class="text-xs text-gray-500 mb-1">Masak</p>
                            <h3 class="font-bold text-gray-800 text-sm mb-2">Nesting Set 2</h3>
                        </div>
                        <div class="mt-2">
                            <span class="text-brand font-bold text-sm">Rp15.000</span><span class="text-xs text-gray-500">/hari</span>
                        </div>
                    </div>
                </div>

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
                    <span>Pakintelan, Gunung Pati</span>
                </div>
                <div class="flex flex-col gap-2">
                    <a href="#" class="hover:text-gray-900">Privacy Policy</a>
                    <a href="#" class="hover:text-gray-900">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>