<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Twenty Nine Adventure</title>
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
                            green: '#1d3f23', // Warna hijau gelap khas brand
                            light: '#f5f6f8', // Background dashboard
                            sidebar: '#fbfbfb',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans text-gray-800 antialiased bg-brand-light flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside class="w-64 bg-brand-sidebar border-r border-gray-200 flex flex-col h-full z-20">
        <!-- Brand / Logo Area -->
        <div class="p-6">
            <h1 class="text-[19px] font-bold text-brand-green leading-tight mb-1">
                Twenty Nine<br>Adventure
            </h1>
            <p class="text-[11px] text-gray-500">Admin Panel</p>
        </div>

        <!-- Navigation -->
        <nav class="flex-1 px-4 py-4 space-y-1.5 overflow-y-auto">
            <!-- Active Item -->
            <a href="#" class="flex items-center gap-3 bg-brand-green text-white px-4 py-3 rounded-lg text-[13px] font-semibold transition">
                <svg class="w-5 h-5 opacity-90" fill="currentColor" viewBox="0 0 20 20"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                Dashboard
            </a>
            
            <a href="#" class="flex items-center gap-3 text-gray-600 hover:bg-gray-100 hover:text-brand-green px-4 py-3 rounded-lg text-[13px] font-semibold transition">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                Produk
            </a>

            <a href="#" class="flex items-center gap-3 text-gray-600 hover:bg-gray-100 hover:text-brand-green px-4 py-3 rounded-lg text-[13px] font-semibold transition">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                Kategori
            </a>

            <a href="#" class="flex items-center gap-3 text-gray-600 hover:bg-gray-100 hover:text-brand-green px-4 py-3 rounded-lg text-[13px] font-semibold transition">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                Booking
            </a>

            <a href="#" class="flex items-center gap-3 text-gray-600 hover:bg-gray-100 hover:text-brand-green px-4 py-3 rounded-lg text-[13px] font-semibold transition">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                Transaksi
            </a>

            <a href="#" class="flex items-center gap-3 text-gray-600 hover:bg-gray-100 hover:text-brand-green px-4 py-3 rounded-lg text-[13px] font-semibold transition">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                Pelanggan
            </a>

            <a href="#" class="flex items-center gap-3 text-gray-600 hover:bg-gray-100 hover:text-brand-green px-4 py-3 rounded-lg text-[13px] font-semibold transition">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                Denda
            </a>

            <a href="#" class="flex items-center gap-3 text-gray-600 hover:bg-gray-100 hover:text-brand-green px-4 py-3 rounded-lg text-[13px] font-semibold transition mb-4">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                Laporan
            </a>
        </nav>

        <!-- Divider & Bottom Actions -->
        <div class="px-4 py-4 border-t border-gray-200 space-y-1.5">
            <a href="#" class="flex items-center gap-3 text-gray-600 hover:bg-gray-100 hover:text-brand-green px-4 py-3 rounded-lg text-[13px] font-semibold transition">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                Pengaturan
            </a>
            <a href="#" class="flex items-center gap-3 text-gray-600 hover:bg-red-50 hover:text-red-600 px-4 py-3 rounded-lg text-[13px] font-semibold transition">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                Logout
            </a>
        </div>
    </aside>

    <!-- Main Content Area -->
    <main class="flex-1 flex flex-col h-full overflow-hidden relative">
        
        <!-- Header -->
        <header class="flex justify-between items-center px-8 py-6 z-10">
            <h2 class="text-2xl font-bold text-gray-900">Dashboard Overview</h2>
            
            <div class="flex items-center gap-6">
                <!-- Search Bar -->
                <div class="relative w-64">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </div>
                    <input type="text" placeholder="Search..." class="w-full pl-10 pr-4 py-2 border border-gray-200 rounded-full text-[13px] focus:outline-none focus:ring-1 focus:ring-brand-green focus:border-brand-green bg-white shadow-sm">
                </div>
                
                <!-- Profile Image -->
                <button class="flex items-center focus:outline-none">
                    <img class="h-9 w-9 rounded-full object-cover border border-gray-200 shadow-sm" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Admin Profile">
                </button>
            </div>
        </header>

        <!-- Scrollable Dashboard Content -->
        <div class="flex-1 overflow-y-auto px-8 pb-8">
            
            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                
                <!-- Card 1: Total Produk -->
                <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm flex flex-col justify-between">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-[13px] font-semibold text-gray-500">Total Produk</h3>
                        <div class="bg-[#375f42] w-10 h-10 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-4xl font-bold text-gray-900 mb-2">142</h2>
                        <p class="text-[11px] font-medium text-green-700 flex items-center gap-1">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                            12% dari bulan lalu
                        </p>
                    </div>
                </div>

                <!-- Card 2: Total Booking -->
                <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm flex flex-col justify-between">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-[13px] font-semibold text-gray-500">Total Booking</h3>
                        <div class="bg-gray-100 w-10 h-10 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-4xl font-bold text-gray-900 mb-2">854</h2>
                        <p class="text-[11px] font-medium text-green-700 flex items-center gap-1">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                            5% dari bulan lalu
                        </p>
                    </div>
                </div>

                <!-- Card 3: Booking Aktif -->
                <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm flex flex-col justify-between">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-[13px] font-semibold text-gray-500">Booking Aktif</h3>
                        <div class="bg-[#75776d] w-10 h-10 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"></path></svg>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-4xl font-bold text-gray-900 mb-2">38</h2>
                        <p class="text-[11px] text-gray-400">Saat ini sedang disewa</p>
                    </div>
                </div>

                <!-- Card 4: Pendapatan -->
                <div class="bg-[#1b4324] rounded-2xl p-6 shadow-md flex flex-col justify-between text-white relative overflow-hidden">
                    <!-- Subtle background decoration if needed -->
                    <div class="flex justify-between items-start mb-2 relative z-10">
                        <h3 class="text-[13px] font-medium text-green-100">Pendapatan<br>Bulan Ini</h3>
                        <div class="bg-white w-10 h-10 rounded-lg flex items-center justify-center shadow-sm">
                            <svg class="w-5 h-5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </div>
                    </div>
                    <div class="relative z-10">
                        <h2 class="text-[34px] font-bold mb-2 tracking-tight">Rp 12.5M</h2>
                        <p class="text-[11px] font-medium text-green-100 flex items-center gap-1">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                            18% dari bulan lalu
                        </p>
                    </div>
                </div>

            </div>

            <!-- Content Grid (Table + List) -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                
                <!-- Booking Terbaru (Table) - Takes up 2 columns -->
                <div class="lg:col-span-2 bg-white rounded-2xl border border-gray-100 shadow-sm">
                    <div class="p-6 flex justify-between items-center border-b border-gray-100">
                        <h3 class="text-xl font-bold text-gray-900">Booking Terbaru</h3>
                        <a href="#" class="text-[13px] font-bold text-brand-green hover:underline">Lihat Semua</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="text-[12px] text-gray-500 font-semibold border-b border-gray-100 bg-[#fbfbfb]">
                                    <th class="py-4 px-6 font-semibold">ID Booking</th>
                                    <th class="py-4 px-6 font-semibold">Pelanggan</th>
                                    <th class="py-4 px-6 font-semibold">Tanggal Sewa</th>
                                    <th class="py-4 px-6 font-semibold">Status</th>
                                    <th class="py-4 px-6 font-semibold text-right">Total</th>
                                </tr>
                            </thead>
                            <tbody class="text-[13px]">
                                <!-- Row 1 -->
                                <tr class="border-b border-gray-100 hover:bg-gray-50 transition">
                                    <td class="py-4 px-6 font-bold text-gray-900">#BK-0012</td>
                                    <td class="py-4 px-6 text-gray-600">Budi Santoso</td>
                                    <td class="py-4 px-6 text-gray-600">24 Oct - 26 Oct</td>
                                    <td class="py-4 px-6">
                                        <span class="bg-[#bdf0c8] text-[#1b5e20] py-1 px-3 rounded text-[11px] font-bold">Aktif</span>
                                    </td>
                                    <td class="py-4 px-6 font-bold text-gray-900 text-right">Rp 450.000</td>
                                </tr>
                                <!-- Row 2 -->
                                <tr class="border-b border-gray-100 hover:bg-gray-50 transition">
                                    <td class="py-4 px-6 font-bold text-gray-900">#BK-0011</td>
                                    <td class="py-4 px-6 text-gray-600">Siti Aminah</td>
                                    <td class="py-4 px-6 text-gray-600">22 Oct - 23 Oct</td>
                                    <td class="py-4 px-6">
                                        <span class="bg-[#e2e2e2] text-gray-700 py-1 px-3 rounded text-[11px] font-bold">Selesai</span>
                                    </td>
                                    <td class="py-4 px-6 font-bold text-gray-900 text-right">Rp 200.000</td>
                                </tr>
                                <!-- Row 3 -->
                                <tr class="border-b border-gray-100 hover:bg-gray-50 transition">
                                    <td class="py-4 px-6 font-bold text-gray-900">#BK-0010</td>
                                    <td class="py-4 px-6 text-gray-600">Andi Dermawan</td>
                                    <td class="py-4 px-6 text-gray-600">25 Oct - 27 Oct</td>
                                    <td class="py-4 px-6">
                                        <span class="bg-[#e4dec6] text-[#635431] py-1 px-3 rounded text-[11px] font-bold">Pending</span>
                                    </td>
                                    <td class="py-4 px-6 font-bold text-gray-900 text-right">Rp 750.000</td>
                                </tr>
                                <!-- Row 4 -->
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="py-4 px-6 font-bold text-gray-900">#BK-0009</td>
                                    <td class="py-4 px-6 text-gray-600">Rina Melati</td>
                                    <td class="py-4 px-6 text-gray-600">20 Oct - 21 Oct</td>
                                    <td class="py-4 px-6">
                                        <span class="bg-[#e2e2e2] text-gray-700 py-1 px-3 rounded text-[11px] font-bold">Selesai</span>
                                    </td>
                                    <td class="py-4 px-6 font-bold text-gray-900 text-right">Rp 150.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Produk Terpopuler - Takes up 1 column -->
                <div class="lg:col-span-1 bg-white rounded-2xl border border-gray-100 shadow-sm p-6 flex flex-col">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">Produk Terpopuler</h3>
                    
                    <div class="flex-1 space-y-6">
                        <!-- Product 1 -->
                        <div class="flex items-center gap-4">
                            <!-- Image Placeholder -->
                            <img src="https://images.unsplash.com/photo-1523987355523-c7b5b0dd90a7?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&q=80" alt="Tenda" class="w-14 h-14 rounded-lg object-cover border border-gray-100">
                            <div>
                                <h4 class="text-[13px] font-bold text-gray-900 leading-tight mb-1">Tenda Dome 4...</h4>
                                <p class="text-[11px] text-gray-500">Disewa 45 kali</p>
                            </div>
                        </div>

                        <!-- Product 2 -->
                        <div class="flex items-center gap-4">
                            <!-- Image Placeholder -->
                            <img src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&q=80" alt="Carrier" class="w-14 h-14 rounded-lg object-cover border border-gray-100">
                            <div>
                                <h4 class="text-[13px] font-bold text-gray-900 leading-tight mb-1">Carrier Eiger 60L</h4>
                                <p class="text-[11px] text-gray-500">Disewa 32 kali</p>
                            </div>
                        </div>

                        <!-- Product 3 -->
                        <div class="flex items-center gap-4">
                            <!-- Image Placeholder -->
                            <img src="https://images.unsplash.com/photo-1520638069507-6bb984b9c9f7?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&q=80" alt="Lampu" class="w-14 h-14 rounded-lg object-cover border border-gray-100">
                            <div>
                                <h4 class="text-[13px] font-bold text-gray-900 leading-tight mb-1">Lampu Tenda LED</h4>
                                <p class="text-[11px] text-gray-500">Disewa 28 kali</p>
                            </div>
                        </div>
                    </div>

                    <!-- Button Laporan -->
                    <button class="w-full mt-8 py-2.5 rounded-lg border border-gray-300 text-[13px] font-semibold text-gray-700 hover:bg-gray-50 transition">
                        Lihat Laporan Lengkap
                    </button>
                </div>

            </div>
        </div>
    </main>

</body>
</html>