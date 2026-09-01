<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peraturan Sewa - Twenty Nine Adventure</title>
    <!-- Hapus script CDN ini jika Anda sudah menginstal Tailwind via Vite/NPM di Laravel Anda -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            DEFAULT: '#1B4D2E', // Warna hijau utama (dark green)
                            light: '#e8f5e9',
                        }
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-white text-gray-800 antialiased flex flex-col min-h-screen">

    <!-- Navbar -->
    <nav class="border-b border-gray-200 py-4 px-6 md:px-12 flex justify-between items-center bg-white">
        <a href="#" class="text-xl font-bold text-brand">Twenty Nine Adventure</a>
        
        <div class="hidden md:flex space-x-6 text-sm font-medium text-gray-500">
            <a href="{{ route('landing') }}" class="hover:text-brand">Home</a>
            <a href="{{ route('katalog') }}" class="hover:text-brand">Katalog</a>
            <a href="{{ route('peraturan') }}" class="text-brand border-b-2 border-brand pb-1">Peraturan Sewa</a>
            <a href="{{ route('tentang') }}" class="hover:text-brand">Tentang Kami</a>
            <a href="{{ route('kontak') }}" class="hover:text-brand">Kontak</a>
        </div>

        <div class="hidden md:flex space-x-3">
            <a href="#" class="px-4 py-2 text-sm font-medium border border-gray-300 rounded-md hover:bg-gray-50">Login</a>
            <a href="#" class="px-4 py-2 text-sm font-medium bg-brand text-white rounded-md hover:bg-green-900">Daftar</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow max-w-6xl mx-auto px-6 py-12 md:px-12 w-full">
        
        <!-- Header Title -->
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl font-bold text-brand mb-4">Peraturan Sewa</h1>
            <p class="text-gray-500 max-w-2xl mx-auto text-sm md:text-base">
                Mohon baca dengan teliti syarat dan ketentuan penyewaan peralatan di Twenty Nine Adventure untuk kenyamanan bersama.
            </p>
        </div>

        <!-- Rules Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
            
            <!-- Card 1 -->
            <div class="border border-gray-200 p-6 rounded-xl shadow-sm bg-white">
                <div class="w-10 h-10 bg-brand text-white rounded-lg flex items-center justify-center mb-4">
                    <!-- Icon ID Card -->
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path></svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Identitas Penyewa</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Penyewa wajib menjaminkan minimal 1 identitas asli yang masih berlaku (KTP/BPJS/KTM/SIM) atas nama penyewa itu sendiri.</p>
            </div>

            <!-- Card 2 -->
            <div class="border border-gray-200 p-6 rounded-xl shadow-sm bg-white">
                <div class="w-10 h-10 bg-brand text-white rounded-lg flex items-center justify-center mb-4">
                    <!-- Icon Note/Receipt -->
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Nota Transaksi</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Penyewa wajib membawa nota dan memfoto nota transaksi saat pengambilan maupun pengembalian barang sebagai bukti resmi.</p>
            </div>

            <!-- Card 3 -->
            <div class="border border-gray-200 p-6 rounded-xl shadow-sm bg-white">
                <div class="w-10 h-10 bg-red-100 text-red-500 rounded-lg flex items-center justify-center mb-4">
                    <!-- Icon Cancel -->
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Kebijakan Pembatalan</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Uang sewa peralatan yang tidak jadi dipakai tidak dapat dikembalikan. Harap pastikan kembali list perlengkapan Anda sebelum melakukan pembayaran.</p>
            </div>

            <!-- Card 4 -->
            <div class="border border-gray-200 p-6 rounded-xl shadow-sm bg-white">
                <div class="w-10 h-10 bg-brand text-white rounded-lg flex items-center justify-center mb-4">
                    <!-- Icon Booking -->
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Booking</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Booking diwajibkan membayar Down Payment (DP) minimal 50% dari total tagihan untuk mengamankan peralatan pesanan Anda.</p>
            </div>

            <!-- Card 5 -->
            <div class="border border-gray-200 p-6 rounded-xl shadow-sm bg-white">
                <div class="w-10 h-10 bg-brand text-white rounded-lg flex items-center justify-center mb-4">
                    <!-- Icon Responsibility -->
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Tanggung Jawab</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Menjaga barang yang disewa dengan baik, tidak merusak, dan menjaga kebersihan peralatan selama masa sewa.</p>
            </div>

            <!-- Card 6 -->
            <div class="border border-gray-200 p-6 rounded-xl shadow-sm bg-white">
                <div class="w-10 h-10 bg-red-100 text-red-500 rounded-lg flex items-center justify-center mb-4">
                    <!-- Icon Warning -->
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Kerusakan & Kehilangan</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Kerusakan atau kehilangan barang sewa sepenuhnya menjadi tanggung jawab penyewa, dan wajib mengganti sesuai harga barang yang bersangkutan.</p>
            </div>
            
        </div>

        <!-- CTA Box -->
        <div class="bg-gray-50 rounded-2xl p-8 md:p-10 flex flex-col md:flex-row items-center justify-between border border-gray-100">
            <div class="mb-6 md:mb-0 text-center md:text-left">
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Siap untuk berpetualang?</h3>
                <p class="text-gray-500 text-sm">Jelajahi katalog kami dan temukan perlengkapan terbaik untuk perjalanan Anda.</p>
            </div>
            <a href="{{ route('katalog') }}" class="px-6 py-3 bg-brand text-white font-medium rounded-lg hover:bg-green-900 transition text-sm">Lihat Katalog</a>
        </div>

    </main>

    <!-- Footer -->
    <footer class="bg-gray-100 pt-16 pb-8 border-t border-gray-200">
        <div class="max-w-6xl mx-auto px-6 md:px-12 grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
            
            <div class="md:col-span-2">
                <h4 class="text-xl font-bold text-brand mb-4">Twenty Nine<br>Adventure</h4>
                <p class="text-sm text-gray-500 max-w-sm">Penyedia perlengkapan outdoor premium untuk pengalaman petualangan terbaik Anda.</p>
            </div>

            <div>
                <h4 class="font-bold text-gray-900 mb-4 text-sm">Kontak Kami</h4>
                <ul class="text-sm text-gray-500 space-y-2">
                    <li>WhatsApp: 085640058704</li>
                    <li>Instagram: @twentynine_adv</li>
                    <li>Address: Gang Durian V, RT/RW 01/01 Pakintelan, Gunung Pati, Semarang, Jawa Tengah</li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold text-gray-900 mb-4 text-sm">Informasi</h4>
                <ul class="text-sm text-gray-500 space-y-2">
                    <li><a href="#" class="hover:text-brand">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-brand">Terms of Service</a></li>
                </ul>
            </div>
        </div>

        <div class="text-center text-xs text-gray-400 border-t border-gray-200 pt-8 max-w-6xl mx-auto px-6">
            &copy; 2026 Twenty Nine Adventure. All rights reserved.
        </div>
    </footer>

</body>
</html>