<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Denda & Peraturan - Twenty Nine Adventure</title>
    <!-- Tailwind CSS (Gunakan CDN untuk frontend preview) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom Font */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; background-color: #fafafa; }
        .text-brand { color: #1e4b27; }
        .bg-brand { background-color: #1e4b27; }
        .border-brand { border-color: #1e4b27; }
    </style>
</head>
<body class="text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white border-b px-8 py-4 flex justify-between items-center sticky top-0 z-50">
        <div class="flex items-center gap-2">
            <!-- Icon Mountain Placeholder -->
            <svg class="w-6 h-6 text-brand" viewBox="0 0 24 24" fill="currentColor">
                <path d="M14 6l-4 5.5 1.5 2L16 8l5 9H3l7-10 2 2.5z"></path>
            </svg>
            <span class="text-xl font-bold text-brand tracking-tight">Twenty Nine Adventure</span>
        </div>
        <div class="hidden md:flex gap-8 text-sm font-medium text-gray-500">
            <a href="#" class="hover:text-gray-900">Home</a>
            <a href="#" class="hover:text-gray-900">Katalog</a>
            <!-- Active Menu -->
            <a href="#" class="text-brand border-b-2 border-brand pb-1">Peraturan Sewa</a>
            <a href="#" class="hover:text-gray-900">Tentang Kami</a>
            <a href="#" class="hover:text-gray-900">Kontak</a>
        </div>
        <div class="flex items-center gap-3">
            <a href="#" class="border border-gray-300 text-sm font-medium text-gray-700 px-4 py-2 rounded hover:bg-gray-50 transition">Login</a>
            <a href="#" class="bg-brand text-white text-sm font-medium px-4 py-2 rounded hover:bg-[#15361c] transition">Daftar</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        
        <!-- Header Page -->
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Denda Keterlambatan &<br>Kerusakan</h1>
            <p class="text-gray-500 text-sm md:text-base">Panduan lengkap mengenai kebijakan denda untuk keterlambatan pengembalian dan kerusakan alat pendakian.</p>
        </div>

        <!-- Section 1: Denda Keterlambatan -->
        <section class="mb-12">
            <h2 class="text-xl font-bold text-brand flex items-center gap-2 mb-6">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                1. Denda Keterlambatan
            </h2>

            <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm">
                <table class="w-full text-left text-sm">
                    <thead class="bg-gray-50 border-b border-gray-200 text-gray-600 font-semibold">
                        <tr>
                            <th class="px-6 py-4">Waktu Keterlambatan</th>
                            <th class="px-6 py-4">Denda (% dari harga sewa per hari)</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 text-gray-800 font-medium">
                        <tr>
                            <td class="px-6 py-4">22.00 - 09.00</td>
                            <td class="px-6 py-4 text-red-600">30%</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4">09.00 - 12.00</td>
                            <td class="px-6 py-4 text-red-600">50%</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4">> 12.00</td>
                            <td class="px-6 py-4 text-red-600">100% (Hitungan 1 hari)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="text-[11px] text-gray-400 mt-3 italic">*Keterlambatan dihitung dari batas akhir pengembalian yang disepakati.</p>
        </section>

        <!-- Section 2: Denda Kerusakan & Kehilangan -->
        <section>
            <h2 class="text-xl font-bold text-brand flex items-center gap-2 mb-6">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                2. Denda Kerusakan & Kehilangan
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                <!-- Card 1: Pasak -->
                <div class="bg-white border border-gray-200 rounded-xl p-5 shadow-sm">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-8 h-8 rounded-full bg-red-50 flex items-center justify-center text-red-400">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                        </div>
                        <h3 class="font-bold text-gray-800">Pasak Hilang/Rusak</h3>
                    </div>
                    <p class="text-sm text-gray-500 mb-4 h-10">Denda dikenakan per buah pasak yang hilang atau tidak dapat digunakan kembali.</p>
                    <span class="inline-block bg-[#fef9c3] text-[#b45309] text-xs font-bold px-3 py-1.5 rounded-md">Rp 5.000 / pcs</span>
                </div>

                <!-- Card 2: Frame Tenda -->
                <div class="bg-white border border-gray-200 rounded-xl p-5 shadow-sm">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-8 h-8 rounded-full bg-red-50 flex items-center justify-center text-red-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                        </div>
                        <h3 class="font-bold text-gray-800">Frame Tenda Patah</h3>
                    </div>
                    <p class="text-sm text-gray-500 mb-4 h-10">Denda dikenakan per ruas frame yang patah atau bengkok parah.</p>
                    <span class="inline-block bg-[#fef9c3] text-[#b45309] text-xs font-bold px-3 py-1.5 rounded-md">Rp 10.000 / ruas</span>
                </div>

                <!-- Card 3: Tenda Bolong/Sobek -->
                <div class="bg-white border border-gray-200 rounded-xl p-5 shadow-sm">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-8 h-8 rounded-full bg-red-50 flex items-center justify-center text-red-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76"></path></svg>
                        </div>
                        <h3 class="font-bold text-gray-800">Tenda Bolong/Sobek</h3>
                    </div>
                    <p class="text-sm text-gray-500 mb-4 h-10">Denda untuk kerusakan pada bahan tenda akibat rokok, api, atau benda tajam.</p>
                    <span class="inline-block bg-[#fef9c3] text-[#b45309] text-xs font-bold px-3 py-1.5 rounded-md">Mulai Rp 50.000</span>
                </div>

                <!-- Card 4: Nesting -->
                <div class="bg-white border border-gray-200 rounded-xl p-5 shadow-sm">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-8 h-8 rounded-full bg-red-50 flex items-center justify-center text-red-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                        </div>
                        <h3 class="font-bold text-gray-800">Nesting Gosong Parah</h3>
                    </div>
                    <p class="text-sm text-gray-500 mb-4 h-10">Kerak membandel yang tidak bisa dibersihkan atau merusak lapisan nesting.</p>
                    <span class="inline-block bg-[#fef9c3] text-[#b45309] text-xs font-bold px-3 py-1.5 rounded-md">Rp 50.000</span>
                </div>

            </div>

            <!-- Info Alert Box -->
            <div class="mt-6 bg-[#f9fafb] border border-gray-200 rounded-xl p-4 flex items-start gap-3">
                <svg class="w-5 h-5 text-brand shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Untuk kerusakan lain yang tidak tercantum, denda akan disesuaikan dengan biaya perbaikan atau harga beli barang baru.
                </p>
            </div>

        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-[#e5e7eb] text-gray-600 py-12 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="md:col-span-1">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-brand" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M14 6l-4 5.5 1.5 2L16 8l5 9H3l7-10 2 2.5z"></path>
                    </svg>
                    <h2 class="text-xl font-bold text-brand leading-tight">Twenty Nine<br>Adventure</h2>
                </div>
                <p class="text-[11px] mt-4 text-gray-500">© 2026 Twenty Nine Adventure. All rights reserved.</p>
            </div>
            
            <div class="space-y-2 text-xs font-medium">
                <span class="block text-gray-800 font-bold mb-3 text-sm">Kontak</span>
                <div>
                    <span class="block text-gray-500 mb-0.5">WhatsApp: 085640058704</span>
                </div>
                <div>
                    <span class="block text-gray-500 mb-0.5">Instagram: @twentynine_adv</span>
                </div>
            </div>

            <div class="space-y-2 text-xs font-medium">
                <span class="block text-gray-800 font-bold mb-3 text-sm">Alamat</span>
                <div>
                    <span class="block text-gray-500">Address: Pakintelan, Gunung Pati</span>
                </div>
            </div>

            <div class="space-y-3 text-xs font-medium">
                <span class="block text-gray-800 font-bold mb-3 text-sm">Legal</span>
                <a href="#" class="block text-gray-500 hover:text-gray-900">Privacy Policy</a>
                <a href="#" class="block text-gray-500 hover:text-gray-900">Terms of Service</a>
            </div>
        </div>
    </footer>

</body>
</html>