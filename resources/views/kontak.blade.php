<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Twenty Nine Adventure</title>
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
                            green: '#24452a',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans text-gray-800 antialiased bg-white flex flex-col min-h-screen">

    <!-- Navbar -->
    <nav class="bg-[#fafafa] px-8 py-5 flex items-center justify-between border-b border-gray-200 sticky top-0 z-50">
        <!-- Logo -->
        <div class="flex items-center gap-2 font-bold text-xl text-brand-green tracking-tight">
            <span>Twenty Nine Adventure</span>
        </div>

        <!-- Navigation Links -->
        <div class="hidden md:flex items-center gap-8 text-[13px] font-semibold text-gray-500">
            <a href="{{ route('landing') }}" class="hover:text-brand-green transition">Home</a>
            <a href="{{ route('katalog') }}" class="hover:text-brand-green transition">Katalog</a>
            <a href="{{ route('peraturan') }}" class="hover:text-brand-green transition">Peraturan Sewa</a>
            <a href="{{ route('tentang') }}" class="hover:text-brand-green transition">Tentang Kami</a>
            <a href="{{ route('kontak') }}" class="text-brand-green border-b-2 border-brand-green pb-1">Kontak</a>
        </div>

        <!-- Auth Buttons -->
        <div class="flex items-center gap-4 text-[13px] font-semibold">
            <a href="{{ route('admin.login') }}" class="text-gray-700 border border-gray-300 rounded-md px-4 py-1.5 hover:bg-gray-100 transition">Login</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow max-w-6xl mx-auto px-6 py-12 w-full">
        <!-- Title Header -->
        <div class="text-center mb-12">
            <h1 class="text-3xl font-bold text-brand-green mb-3">Hubungi Kami</h1>
            <p class="text-xs md:text-sm text-gray-500 max-w-xl mx-auto leading-relaxed">
                Punya pertanyaan tentang alat camping? Butuh panduan untuk petualangan Anda selanjutnya? Tim Twenty Nine Adventure siap membantu Anda.
            </p>
        </div>

        <!-- Cards Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <!-- Card 1: Basecamp -->
            <div class="border border-gray-200 rounded-xl p-8 flex flex-col items-center text-center shadow-sm">
                <div class="w-12 h-12 rounded-full bg-gray-100 flex items-center justify-center mb-6">
                    <!-- Location Icon -->
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="text-base font-bold text-gray-900 mb-2">Basecamp</h3>
                <p class="text-xs text-gray-500 leading-relaxed max-w-[220px]">
                    Gang Durian V, RT/RW 01/01 Pakintelan, Gunung Pati<br>
                    Semarang, Jawa Tengah
                </p>
            </div>

            <!-- Card 2: WhatsApp -->
            <div class="border border-gray-200 rounded-xl p-8 flex flex-col items-center text-center shadow-sm">
                <div class="w-12 h-12 rounded-full bg-gray-100 flex items-center justify-center mb-6">
                    <!-- Chat Icon -->
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </div>
                <h3 class="text-base font-bold text-gray-900 mb-1">WhatsApp</h3>
                <p class="text-xs text-gray-500 mb-6">085640058704</p>
                <a href="https://wa.me/6285640058704" target="_blank" class="bg-brand-green text-white text-xs font-semibold px-5 py-2.5 rounded-md hover:bg-green-800 transition flex items-center gap-2">
                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg>
                    Chat Sekarang
                </a>
            </div>

            <!-- Card 3: Instagram -->
            <div class="border border-gray-200 rounded-xl p-8 flex flex-col items-center text-center shadow-sm">
                <div class="w-12 h-12 rounded-full bg-gray-100 flex items-center justify-center mb-6">
                    <!-- Camera Icon -->
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="text-base font-bold text-gray-900 mb-1">Instagram</h3>
                <p class="text-xs text-gray-500 mb-6">@twentynine_adv</p>
                <a href="https://instagram.com/twentynine_adv" target="_blank" class="border border-gray-300 text-gray-700 text-xs font-semibold px-5 py-2 rounded-md hover:bg-gray-100 transition">
                    Follow Kami
                </a>
            </div>
        </div>

        <!-- Google Maps Section -->
        <div class="w-full h-80 rounded-xl overflow-hidden border border-gray-200 shadow-sm">
            <iframe 
                class="w-full h-full border-0" 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15838.163378942621!2d110.3703998!3d-7.0631245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708a3d5ddbe2e3%3A0x24a44ed11440a32!2sPakintelan%2C%20Gunung%20Pati%2C%20Semarang%20City%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-[#ebebeb] py-10 px-8 border-t border-gray-200 mt-auto">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Brand Column -->
            <div>
                <div class="font-bold text-[17px] text-brand-green leading-tight mb-6">
                    Twenty Nine<br>Adventure
                </div>
                <p class="text-[10px] text-gray-500 leading-relaxed">
                    © 2026 Twenty Nine Adventure.<br>All rights reserved.
                </p>
            </div>

            <!-- Contact Column -->
            <div>
                <h4 class="font-bold text-gray-900 mb-3 text-[13px]">Contact</h4>
                <ul class="text-[12px] text-gray-500 space-y-2">
                    <li>WhatsApp: 085640058704</li>
                    <li>Instagram: @twentynine_adv</li>
                    <li>Address: Gang Durian V, RT/RW 01/01 Pakintelan, Gunung Pati, Semarang, Jawa Tengah</li>
                </ul>
            </div>

            <!-- Legal Column -->
            <div>
                <h4 class="font-bold text-gray-900 mb-3 text-[13px]">Legal</h4>
                <ul class="text-[12px] text-gray-500 space-y-2">
                    <li><a href="#" class="hover:underline">Privacy Policy</a></li>
                    <li><a href="#" class="hover:underline">Terms of Service</a></li>
                </ul>
            </div>
        </div>
    </footer>

</body>
</html>