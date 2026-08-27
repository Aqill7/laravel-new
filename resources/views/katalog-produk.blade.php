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
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

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
            <a href="#" class="text-sm font-medium text-gray-600 hover:text-gray-900">Login</a>
        </div>
    </nav>

    <!-- Header Section -->
    <header class="text-center py-12 px-4">
        <h1 class="text-4xl md:text-5xl font-bold text-brand mb-4">Perlengkapan Outdoor</h1>
        <p class="text-gray-500">Temukan perlengkapan yang kamu butuhkan untuk petualanganmu.</p>
        
        <!-- Search Bar -->
        <div class="mt-8 max-w-lg mx-auto relative">
            <input type="text" placeholder="Cari perlengkapan..." 
                   class="w-full border border-gray-300 rounded-lg py-3 px-10 focus:outline-none focus:ring-1 focus:ring-brand shadow-sm">
            <svg class="w-5 h-5 absolute left-3 top-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </div>

        <!-- Filter / Categories -->
        <div class="flex flex-wrap justify-center gap-3 mt-8">
            <button class="bg-brand text-white px-5 py-1.5 rounded-full text-sm font-medium">Semua</button>
            <button class="border border-gray-300 text-gray-600 bg-white px-5 py-1.5 rounded-full text-sm font-medium hover:bg-gray-50">Tenda</button>
            <button class="border border-gray-300 text-gray-600 bg-white px-5 py-1.5 rounded-full text-sm font-medium hover:bg-gray-50">Flysheet</button>
            <button class="border border-gray-300 text-gray-600 bg-white px-5 py-1.5 rounded-full text-sm font-medium hover:bg-gray-50">Kursi & Meja</button>
            <button class="border border-gray-300 text-gray-600 bg-white px-5 py-1.5 rounded-full text-sm font-medium hover:bg-gray-50">Paket</button>
            <button class="border border-gray-300 text-gray-600 bg-white px-5 py-1.5 rounded-full text-sm font-medium hover:bg-gray-50">Cooking</button>
            <button class="border border-gray-300 text-gray-600 bg-white px-5 py-1.5 rounded-full text-sm font-medium hover:bg-gray-50">Tas</button>
            <button class="border border-gray-300 text-gray-600 bg-white px-5 py-1.5 rounded-full text-sm font-medium hover:bg-gray-50">Pakaian</button>
            <button class="border border-gray-300 text-gray-600 bg-white px-5 py-1.5 rounded-full text-sm font-medium hover:bg-gray-50">Lampu</button>
            <button class="border border-gray-300 text-gray-600 bg-white px-5 py-1.5 rounded-full text-sm font-medium hover:bg-gray-50">Lain-lain</button>
        </div>
    </header>

    <!-- Product Grid -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-20">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Card 1 -->
            <div class="bg-white border rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">
                <div class="relative h-48 bg-gray-200">
                    <img src="https://placehold.co/400x300/e2e8f0/64748b?text=Tenda+2P" alt="Tenda 2P" class="w-full h-full object-cover">
                    <span class="absolute top-2 right-2 bg-white/90 text-gray-700 text-xs font-semibold px-2 py-1 rounded">Tenda</span>
                </div>
                <div class="p-4 flex flex-col justify-between h-32">
                    <h3 class="font-bold text-gray-800">Tenda 2P Single Layer</h3>
                    <div class="flex justify-between items-end mt-4">
                        <div>
                            <span class="text-brand font-bold text-sm">Rp25.000</span><span class="text-xs text-gray-500">/hari</span>
                        </div>
                        <button class="border border-gray-400 text-gray-700 text-xs font-medium px-3 py-1.5 rounded hover:bg-gray-50">Lihat Detail</button>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white border rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">
                <div class="relative h-48 bg-gray-200">
                    <img src="https://placehold.co/400x300/e2e8f0/64748b?text=Tenda+4-5P" alt="Tenda 4-5P" class="w-full h-full object-cover">
                    <span class="absolute top-2 right-2 bg-white/90 text-gray-700 text-xs font-semibold px-2 py-1 rounded">Tenda</span>
                </div>
                <div class="p-4 flex flex-col justify-between h-32">
                    <h3 class="font-bold text-gray-800">Tenda 4-5P Double Layer</h3>
                    <div class="flex justify-between items-end mt-4">
                        <div>
                            <span class="text-brand font-bold text-sm">Rp40.000</span><span class="text-xs text-gray-500">/hari</span>
                        </div>
                        <button class="border border-gray-400 text-gray-700 text-xs font-medium px-3 py-1.5 rounded hover:bg-gray-50">Lihat Detail</button>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white border rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">
                <div class="relative h-48 bg-gray-200">
                    <img src="https://placehold.co/400x300/e2e8f0/64748b?text=Matras" alt="Matras" class="w-full h-full object-cover">
                    <span class="absolute top-2 right-2 bg-white/90 text-gray-700 text-xs font-semibold px-2 py-1 rounded">Lain-lain</span>
                </div>
                <div class="p-4 flex flex-col justify-between h-32">
                    <h3 class="font-bold text-gray-800">Matras</h3>
                    <div class="flex justify-between items-end mt-4">
                        <div>
                            <span class="text-brand font-bold text-sm">Rp5.000</span><span class="text-xs text-gray-500">/hari</span>
                        </div>
                        <button class="border border-gray-400 text-gray-700 text-xs font-medium px-3 py-1.5 rounded hover:bg-gray-50">Lihat Detail</button>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white border rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">
                <div class="relative h-48 bg-gray-200">
                    <img src="https://placehold.co/400x300/e2e8f0/64748b?text=Sleeping+Bag" alt="Sleeping Bag" class="w-full h-full object-cover">
                    <span class="absolute top-2 right-2 bg-white/90 text-gray-700 text-xs font-semibold px-2 py-1 rounded">Lain-lain</span>
                </div>
                <div class="p-4 flex flex-col justify-between h-32">
                    <h3 class="font-bold text-gray-800">Sleeping Bag</h3>
                    <div class="flex justify-between items-end mt-4">
                        <div>
                            <span class="text-brand font-bold text-sm">Rp10.000</span><span class="text-xs text-gray-500">/hari</span>
                        </div>
                        <button class="border border-gray-400 text-gray-700 text-xs font-medium px-3 py-1.5 rounded hover:bg-gray-50">Lihat Detail</button>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="bg-white border rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">
                <div class="relative h-48 bg-gray-200">
                    <img src="https://placehold.co/400x300/e2e8f0/64748b?text=Tas+Carrier" alt="Tas Carrier" class="w-full h-full object-cover">
                    <span class="absolute top-2 right-2 bg-white/90 text-gray-700 text-xs font-semibold px-2 py-1 rounded">Tas</span>
                </div>
                <div class="p-4 flex flex-col justify-between h-32">
                    <h3 class="font-bold text-gray-800">Tas Carrier 65L</h3>
                    <div class="flex justify-between items-end mt-4">
                        <div>
                            <span class="text-brand font-bold text-sm">Rp25.000</span><span class="text-xs text-gray-500">/hari</span>
                        </div>
                        <button class="border border-gray-400 text-gray-700 text-xs font-medium px-3 py-1.5 rounded hover:bg-gray-50">Lihat Detail</button>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="bg-white border rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">
                <div class="relative h-48 bg-gray-200">
                    <img src="https://placehold.co/400x300/e2e8f0/64748b?text=Sepatu+Tracking" alt="Sepatu Tracking" class="w-full h-full object-cover">
                    <span class="absolute top-2 right-2 bg-white/90 text-gray-700 text-xs font-semibold px-2 py-1 rounded">Pakaian</span>
                </div>
                <div class="p-4 flex flex-col justify-between h-32">
                    <h3 class="font-bold text-gray-800">Sepatu Tracking</h3>
                    <div class="flex justify-between items-end mt-4">
                        <div>
                            <span class="text-brand font-bold text-sm">Rp25.000</span><span class="text-xs text-gray-500">/hari</span>
                        </div>
                        <button class="border border-gray-400 text-gray-700 text-xs font-medium px-3 py-1.5 rounded hover:bg-gray-50">Lihat Detail</button>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-200 text-gray-600 py-12 px-8">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h2 class="text-xl font-bold text-brand mb-4">Twenty Nine<br>Adventure</h2>
                <p class="text-xs mt-4">© 2026 Twenty Nine Adventure. All rights reserved.</p>
            </div>
            <div>
                <h4 class="font-bold text-gray-800 mb-4 text-sm">Contact</h4>
                <ul class="space-y-2 text-sm">
                    <li>WhatsApp: 085640058704</li>
                    <li>Instagram: @twentynine_adv</li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold text-gray-800 mb-4 text-sm">Location</h4>
                <p class="text-sm">Address: Pakintelan, Gunung Pati</p>
            </div>
            <div>
                <h4 class="font-bold text-gray-800 mb-4 text-sm">Legal</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-gray-900">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-gray-900">Terms of Service</a></li>
                </ul>
            </div>
        </div>
    </footer>

</body>
</html>