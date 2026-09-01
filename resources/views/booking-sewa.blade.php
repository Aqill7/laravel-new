<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Twenty Nine Adventure</title>
    <!-- Tailwind CSS (Gunakan CDN untuk frontend preview) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom Font */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; background-color: #fcfcfc; }
        .text-brand { color: #154122; } /* Hijau gelap sesuai gambar */
        .bg-brand { background-color: #154122; }
        .border-brand { border-color: #154122; }
    </style>
</head>
<body class="text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white border-b px-8 py-4 flex justify-between items-center sticky top-0 z-50">
        <div class="flex items-center gap-2">
            <!-- Placeholder Logo -->
            <a href="{{ route('landing') }}" class="text-xl font-bold text-brand tracking-tight">Twenty Nine Adventure</a>
        </div>
        <div class="hidden md:flex gap-8 text-sm font-medium text-gray-500">
            <a href="{{ route('landing') }}" class="hover:text-gray-900">Home</a>
            <a href="{{ route('katalog') }}" class="hover:text-gray-900">Katalog</a>
            <a href="{{ route('peraturan') }}" class="hover:text-gray-900">Peraturan Sewa</a>
            <a href="{{ route('tentang') }}" class="hover:text-gray-900">Tentang Kami</a>
            <a href="{{ route('kontak') }}" class="hover:text-gray-900">Kontak</a>
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ route('admin.login') }}" class="border border-gray-300 text-sm font-medium text-gray-700 px-4 py-2 rounded hover:bg-gray-50 transition">Login</a>
            <a href="{{ route('admin.login') }}" class="bg-brand text-white text-sm font-medium px-4 py-2 rounded hover:bg-[#0f2e18] transition">Daftar</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        
        <!-- Page Title -->
        <h1 class="text-3xl font-bold text-brand mb-8">Checkout</h1>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            
            <!-- Left Column: Data Form (Takes up 7 columns on large screens) -->
            <div class="lg:col-span-7">
                <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm">
                    <!-- Section Title -->
                    <h2 class="text-lg font-bold text-brand flex items-center gap-2 mb-6">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        Data Penyewa
                    </h2>

                    <!-- Form Fields -->
                    <form action="#" method="POST" class="space-y-5">
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Nama Lengkap</label>
                            <input type="text" placeholder="Masukkan nama lengkap" 
                                   class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-1 focus:ring-brand focus:border-brand">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Nomor WhatsApp</label>
                            <input type="text" placeholder="08xxxxxxxxxx" 
                                   class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-1 focus:ring-brand focus:border-brand">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Alamat Lengkap</label>
                            <textarea rows="4" placeholder="Alamat domisili saat ini" 
                                      class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-1 focus:ring-brand focus:border-brand resize-none"></textarea>
                        </div>

                    </form>
                </div>
            </div>

            <!-- Right Column: Summary & Payment (Takes up 5 columns on large screens) -->
            <div class="lg:col-span-5 space-y-6">
                
                <!-- Card 1: Ringkasan Pesanan -->
                <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm">
                    <h2 class="text-lg font-bold text-brand flex items-center gap-2 mb-6">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        Ringkasan Pesanan
                    </h2>

                    <!-- Items -->
                    <div class="space-y-4 mb-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-sm font-semibold text-gray-800">Tenda 4-5P Double Layer</h3>
                                <p class="text-xs text-gray-500 mt-0.5">1 set</p>
                            </div>
                            <span class="text-sm font-medium text-gray-800">Rp 45.000 / hari</span>
                        </div>
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-sm font-semibold text-gray-800">Matras</h3>
                                <p class="text-xs text-gray-500 mt-0.5">2 pcs</p>
                            </div>
                            <span class="text-sm font-medium text-gray-800">Rp 10.000 / hari</span>
                        </div>
                    </div>

                    <hr class="border-gray-200 mb-4">

                    <!-- Dates & Duration -->
                    <div class="space-y-3 text-sm">
                        <div class="flex justify-between">
                            <span class="text-gray-500">Tanggal Mulai</span>
                            <span class="font-medium text-gray-800">24 Nov 2023</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-500">Tanggal Selesai</span>
                            <span class="font-medium text-gray-800">26 Nov 2023</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-500">Durasi Sewa</span>
                            <span class="font-medium text-gray-800">2 Hari</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Pembayaran -->
                <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm">
                    <h2 class="text-lg font-bold text-brand flex items-center gap-2 mb-6">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                        Pembayaran
                    </h2>

                    <div class="flex justify-between items-center mb-3">
                        <span class="text-sm text-gray-600">Subtotal Barang</span>
                        <span class="text-sm font-medium text-gray-800">Rp 55.000 / hari</span>
                    </div>
                    
                    <div class="flex justify-between items-center mb-6">
                        <span class="text-base font-bold text-brand">Total Sewa (2 Hari)</span>
                        <span class="text-xl font-bold text-brand">Rp 110.000</span>
                    </div>

                    <!-- Down Payment Info Box -->
                    <div class="bg-gray-50 border border-gray-200 rounded-lg p-4 space-y-2 mb-6">
                        <div class="flex justify-between text-xs">
                            <span class="text-gray-500">Minimal DP (50%)</span>
                            <span class="font-medium text-gray-800">Rp 55.000</span>
                        </div>
                        <div class="flex justify-between text-xs">
                            <span class="text-gray-500">Sisa Pembayaran</span>
                            <span class="font-medium text-gray-800">Rp 55.000</span>
                        </div>
                    </div>

                    <!-- Action Button -->
                    <button class="w-full bg-brand text-white font-semibold py-3 rounded-lg hover:bg-[#0f2e18] transition flex justify-center items-center gap-2 shadow-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Konfirmasi Booking
                    </button>
                    
                    <p class="text-[10px] text-gray-400 text-center mt-3">
                        Dengan menekan tombol, Anda menyetujui Peraturan Sewa.
                    </p>
                </div>

            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-[#e5e7eb] text-gray-600 py-12 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="md:col-span-1">
                <h2 class="text-xl font-bold text-brand mb-2"><a href="{{ route('landing') }}">Twenty Nine<br>Adventure</a></h2>
                <p class="text-xs mt-4 text-gray-500">© 2026 Twenty Nine Adventure. All rights reserved.</p>
            </div>
            
            <div class="space-y-2 text-xs font-medium">
                <div>
                    <span class="block text-gray-500 mb-0.5">WhatsApp: 085640058704</span>
                </div>
                <div>
                    <span class="block text-gray-500 mb-0.5">Instagram: @twentynine_adv</span>
                </div>
                <div>
                    <span class="block text-gray-500">Address: Gang Durian V, RT/RW 01/01 Pakintelan, Gunung Pati, Semarang, Jawa Tengah</span>
                </div>
            </div>

            <div class="space-y-3 text-xs font-medium">
                <a href="{{ route('peraturan') }}" class="block text-gray-500 hover:text-gray-900">Privacy Policy</a>
                <a href="{{ route('peraturan') }}" class="block text-gray-500 hover:text-gray-900">Terms of Service</a>
            </div>
        </div>
    </footer>

</body>
</html>