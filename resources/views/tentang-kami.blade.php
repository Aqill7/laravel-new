<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Twenty Nine Adventure</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Montserrat', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            green: '#24452a', // Warna hijau gelap khas logo
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans text-gray-800 antialiased bg-white">

    <!-- Navbar -->
    <nav class="bg-[#fafafa] px-8 py-5 flex items-center justify-between border-b border-gray-200">
        <!-- Logo -->
        <div class="flex items-center gap-2 font-bold text-xl text-brand-green tracking-tight">
            <span>Twenty Nine Adventure</span>
        </div>

        <!-- Navigation Links -->
        <div class="hidden md:flex items-center gap-8 text-[13px] font-semibold text-gray-500">
            <a href="{{ route('landing') }}" class="hover:text-brand-green transition">Home</a>
            <a href="{{ route('katalog') }}" class="hover:text-brand-green transition">Katalog</a>
            <a href="{{ route('peraturan') }}" class="hover:text-brand-green transition">Peraturan Sewa</a>
            <a href="{{ route('tentang') }}" class="text-brand-green border-b-2 border-brand-green pb-1">Tentang Kami</a>
            <a href="{{ route('kontak') }}" class="hover:text-brand-green transition">Kontak</a>
        </div>

        <!-- Auth Buttons -->
        <div class="flex items-center gap-6 text-[13px] font-semibold">
            <a href="{{ route('admin.login') }}" class="text-gray-500 hover:text-brand-green">Login</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="relative bg-gray-900 h-[450px] flex flex-col items-center justify-center text-center px-4">
        <!-- Background Image with Overlay (Menggunakan placeholder gunung/tenda) -->
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1523987355523-c7b5b0dd90a7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')] bg-cover bg-center opacity-70"></div>
        
        <div class="relative z-10 max-w-2xl text-white">
            <h2 class="text-sm font-medium mb-4 tracking-wide">Petualangan Dimulai Dengan Perlengkapan Yang Tepat</h2>
            <p class="text-sm md:text-[15px] leading-relaxed font-light text-gray-200">
                Twenty Nine Adventure adalah mitra terpercaya Anda untuk penyewaan dan penjualan perlengkapan outdoor berkualitas tinggi. Kami menyediakan peralatan yang andal untuk penjelajah akhir pekan maupun penggiat alam, memastikan setiap perjalanan aman dan berkesan.
            </p>
        </div>
    </header>

    <!-- Why Choose Us Section -->
    <section class="py-20 px-8 max-w-5xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-3">Mengapa Memilih Kami</h2>
            <p class="text-[13px] text-gray-500 max-w-xl mx-auto leading-relaxed">Temukan pilar utama yang menjadikan Twenty Nine Adventure pilihan teratas untuk kebutuhan perlengkapan outdoor Anda.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Card 1 -->
            <div class="border border-gray-200 rounded-lg p-8 shadow-sm">
                <div class="bg-brand-green w-10 h-10 rounded flex items-center justify-center mb-6">
                    <!-- Icon Pin -->
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Lokasi Strategis</h3>
                <p class="text-gray-500 text-[13px] leading-relaxed">Terletak di jalur petualangan Anda, memudahkan proses pengambilan dan pengembalian perlengkapan.</p>
            </div>

            <!-- Card 2 -->
            <div class="border border-gray-200 rounded-lg p-8 shadow-sm">
                <div class="bg-brand-green w-10 h-10 rounded flex items-center justify-center mb-6">
                    <!-- Icon Diamond -->
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8l4 4-4 4-4-4 4-4z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9-9 9-9-9z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Pelayanan Prima</h3>
                <p class="text-gray-500 text-[13px] leading-relaxed">Konsultasi ahli dan pelayanan ramah dari sesama penggiat alam yang memahami kebutuhan perjalanan Anda.</p>
            </div>

            <!-- Card 3 -->
            <div class="border border-gray-200 rounded-lg p-8 shadow-sm">
                <div class="bg-brand-green w-10 h-10 rounded flex items-center justify-center mb-6">
                    <!-- Icon Box -->
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Peralatan Premium</h3>
                <p class="text-gray-500 text-[13px] leading-relaxed">Menyediakan peralatan berkualitas tinggi dan terawat dari merek terkemuka untuk keandalan di segala kondisi.</p>
            </div>

            <!-- Card 4 -->
            <div class="border border-gray-200 rounded-lg p-8 shadow-sm">
                <div class="bg-brand-green w-10 h-10 rounded flex items-center justify-center mb-6">
                    <!-- Icon Truck -->
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Layanan Pengantaran</h3>
                <p class="text-gray-500 text-[13px] leading-relaxed">Opsi pengantaran fleksibel untuk membawa perlengkapan langsung ke lokasi atau basecamp Anda.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#ebebeb] py-10 px-8 border-t border-gray-200">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Footer Logo -->
            <div class="md:col-span-1">
                <div class="flex items-start gap-2 font-bold text-[17px] text-brand-green leading-tight mb-8">
                    <svg class="w-5 h-5 mt-0.5" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 3l5 8h-3l4 8H6l4-8H7l5-8z" />
                    </svg>
                    <span>Twenty Nine<br>Adventure</span>
                </div>
                <p class="text-[10px] text-gray-500 leading-tight">© 2026 Twenty Nine Adventure. All rights<br>reserved.</p>
            </div>

            <!-- Connect -->
            <div>
                <h4 class="font-bold text-gray-900 mb-3 text-[13px]">Connect</h4>
                <ul class="text-[12px] text-gray-500 space-y-2">
                    <li>WhatsApp: 085640058704</li>
                    <li>Instagram: @twentynine_adv</li>
                </ul>
            </div>

            <!-- Visit Us -->
            <div>
                <h4 class="font-bold text-gray-900 mb-3 text-[13px]">Visit Us</h4>
                <p class="text-[12px] text-gray-500">Address: Gang Durian V, RT/RW 01/01 Pakintelan, Gunung Pati, Semarang, Jawa Tengah</p>
            </div>

            <!-- Legal -->
            <div>
                <h4 class="font-bold text-gray-900 mb-3 text-[13px]">Legal</h4>
                <ul class="text-[12px] text-gray-500 space-y-2">
                    <li>Privacy Policy</li>
                    <li>Terms of Service</li>
                </ul>
            </div>
        </div>
    </footer>

</body>
</html>