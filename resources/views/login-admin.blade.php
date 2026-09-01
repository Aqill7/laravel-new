<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Twenty Nine Adventure</title>
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
                            green: '#24452a', // Warna hijau gelap khas
                        }
                    }
                }
            }
        }
    </script>
</head>
<!-- Latar belakang menggunakan warna abu-abu sangat muda/off-white agar card putih lebih menonjol -->
<body class="font-sans text-gray-800 antialiased bg-[#f8f8f8] flex flex-col min-h-screen">

    <!-- Main Content Area -->
    <main class="flex-grow flex items-center justify-center px-4 py-12 relative">
        <div class="absolute top-6 left-6">
            <button onclick="history.back()" class="flex items-center gap-1.5 text-sm font-medium text-gray-600 hover:text-brand-green bg-white border border-gray-200 px-3 py-1.5 rounded-lg shadow-sm transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Kembali
            </button>
        </div>
        <!-- Login Card -->
        <div id="login-card" class="bg-white w-full max-w-[400px] p-8 md:p-10 rounded-2xl shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] border border-gray-100">
            
            <!-- Titles -->
            <h1 class="text-2xl font-bold text-center text-gray-900 leading-snug mb-2">
                Login Admin
            </h1>
            <p class="text-xs text-gray-400 text-center mb-8">
                Silakan masuk ke akun administrator Anda.
            </p>

            <!-- Form -->
            <form action="{{ route('admin.login.submit') }}" method="POST">
                @csrf <!-- Laravel CSRF Token -->
                
                <!-- Email -->
                <div class="mb-5">
                    <label for="email" class="block text-[11px] font-bold text-gray-700 mb-2">Email</label>
                    <input type="email" id="email" name="email" placeholder="nama@email.com" 
                        class="w-full border border-gray-300 rounded-md px-4 py-2.5 text-[13px] text-gray-700 focus:outline-none focus:border-brand-green focus:ring-1 focus:ring-brand-green transition placeholder-gray-300" required>
                </div>

                <!-- Password -->
                <div class="mb-5">
                    <label for="password" class="block text-[11px] font-bold text-gray-700 mb-2">Password</label>
                    <div class="relative">
                        <input type="password" id="password" name="password" placeholder="********" 
                            class="w-full border border-gray-300 rounded-md px-4 py-2.5 text-[13px] text-gray-700 focus:outline-none focus:border-brand-green focus:ring-1 focus:ring-brand-green transition placeholder-gray-300 pr-10" required>
                        <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 focus:outline-none">
                            <svg id="eye-icon" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <script>
                    function togglePassword() {
                        const passwordInput = document.getElementById('password');
                        if (passwordInput.type === 'password') {
                            passwordInput.type = 'text';
                        } else {
                            passwordInput.type = 'password';
                        }
                    }
                </script>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between mb-8 mt-2">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="remember" class="w-3.5 h-3.5 text-brand-green border-gray-300 rounded focus:ring-brand-green">
                        <span class="text-[11px] text-gray-500">Ingat Saya</span>
                    </label>
                    <a href="#" class="text-[11px] text-brand-green hover:underline">Lupa Password?</a>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full bg-brand-green text-white text-[13px] font-bold py-3 rounded-md hover:bg-green-800 transition shadow-sm">
                    Login
                </button>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-[#e2e2e2] pt-12 pb-6 px-8 mt-auto text-gray-600 border-t border-gray-300">
        <div class="max-w-6xl mx-auto">
            <!-- Top Section: 4 Columns -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-10">
                <!-- Column 1: Brand -->
                <div class="md:col-span-1 pr-4">
                    <h3 class="font-bold text-[17px] text-brand-green leading-tight mb-3">
                        Twenty Nine<br>Adventure
                    </h3>
                    <p class="text-[11px] leading-relaxed">
                        Penyewaan alat outdoor terpercaya untuk petualangan Anda.
                    </p>
                </div>

                <!-- Column 2: Kontak -->
                <div>
                    <h4 class="font-bold text-gray-800 mb-3 text-[12px]">Kontak</h4>
                    <ul class="text-[11px] space-y-2">
                        <li>WhatsApp: 085640058704</li>
                        <li>Instagram: @twentynine_adv</li>
                    </ul>
                </div>

                <!-- Column 3: Lokasi -->
                <div>
                    <h4 class="font-bold text-gray-800 mb-3 text-[12px]">Lokasi</h4>
                    <p class="text-[11px]">Address: Gang Durian V, RT/RW 01/01 Pakintelan, Gunung Pati, Semarang, Jawa Tengah</p>
                </div>

                <!-- Column 4: Legal -->
                <div>
                    <h4 class="font-bold text-gray-800 mb-3 text-[12px]">Legal</h4>
                    <ul class="text-[11px] space-y-2">
                        <li><a href="#" class="hover:text-brand-green">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-brand-green">Terms of Service</a></li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Section: Copyright (with a subtle top border) -->
            <div class="pt-6 border-t border-gray-300/60 text-center">
                <p class="text-[9px] text-gray-500 font-medium">
                    © 2026 Twenty Nine Adventure. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

</body>
</html>