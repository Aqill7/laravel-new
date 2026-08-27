<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Management - Twenty Nine Adventure</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-white flex h-screen overflow-hidden text-gray-800">

    <!-- Sidebar -->
    <aside class="w-64 flex-shrink-0 bg-[#F8F9FA] border-r border-gray-200 flex flex-col justify-between">
        <div class="p-6">
            <!-- Brand -->
            <div class="mb-10">
                <h1 class="text-2xl font-extrabold text-[#1B3C20] leading-tight">Twenty Nine<br>Adventure</h1>
                <p class="text-xs font-semibold text-gray-500 mt-1 uppercase tracking-wide">Admin Panel</p>
            </div>

            <!-- Navigation -->
            <nav class="space-y-1">
                <a href="#" class="flex items-center px-4 py-2.5 text-gray-600 hover:bg-gray-200 rounded-lg transition-colors font-medium text-sm">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                    </svg>
                    Dashboard
                </a>
                <!-- Active State -->
                <a href="#" class="flex items-center px-4 py-2.5 text-gray-900 bg-gray-100/50 font-bold rounded-lg transition-colors text-sm">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    Booking
                </a>
                <a href="#" class="flex items-center px-4 py-2.5 text-gray-600 hover:bg-gray-200 rounded-lg transition-colors font-medium text-sm">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                    Products
                </a>
            </nav>
        </div>

        <div class="p-6 border-t border-gray-200">
            <nav class="space-y-1">
                <a href="#" class="flex items-center px-4 py-2 text-gray-600 hover:bg-gray-200 rounded-lg transition-colors font-medium text-sm">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Settings
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-red-500 hover:bg-red-50 rounded-lg transition-colors font-bold text-sm">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                    Logout
                </a>
            </nav>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-10 overflow-y-auto bg-[#FAFAFA]">
        
        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 gap-4">
            <div>
                <h2 class="text-4xl font-extrabold text-gray-900 tracking-tight mb-2">Booking Management</h2>
                <p class="text-gray-500 text-sm">View and manage all rental reservations.</p>
            </div>
            
            <div class="flex items-center space-x-3">
                <!-- Search -->
                <div class="relative">
                    <svg class="w-4 h-4 absolute left-3 top-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <input type="text" placeholder="Search booking no..." class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-1 focus:ring-[#1B3C20] focus:border-[#1B3C20] w-64 bg-white shadow-sm">
                </div>
                
                <!-- Filter Button -->
                <button class="bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 px-4 py-2 rounded-lg flex items-center font-semibold text-sm shadow-sm transition-colors">
                    <svg class="w-4 h-4 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
                    </svg>
                    Filter
                </button>
            </div>
        </div>

        <!-- Table Container -->
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-[#F8F9FA] text-gray-500 text-xs font-bold uppercase tracking-wide border-b border-gray-200">
                        <th class="px-6 py-4 rounded-tl-xl w-32">Booking No</th>
                        <th class="px-6 py-4">Tenant Name</th>
                        <th class="px-6 py-4 w-56">Product</th>
                        <th class="px-6 py-4">Dates</th>
                        <th class="px-6 py-4">Total</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4 text-center rounded-tr-xl w-20">Action</th>
                    </tr>
                </thead>
                <tbody class="text-sm text-gray-800 divide-y divide-gray-100">
                    
                    <!-- Row 1: Dikonfirmasi -->
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-5 font-bold text-gray-900">
                            #BKG-<br>2401
                        </td>
                        <td class="px-6 py-5">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-[#4A7840] text-white flex items-center justify-center font-bold text-xs mr-3 shrink-0">
                                    AB
                                </div>
                                <span class="font-medium text-gray-700">Ahmad<br>Budi</span>
                            </div>
                        </td>
                        <td class="px-6 py-5 text-gray-500 leading-relaxed">
                            Eiger Carrier<br>60L + Tenda<br>Dome 4P
                        </td>
                        <td class="px-6 py-5">
                            <span class="text-gray-600 block">12 Oct -<br>15 Oct 2024</span>
                            <span class="text-gray-400 text-xs mt-1 block">3 Days</span>
                        </td>
                        <td class="px-6 py-5 font-bold text-[#1B3C20]">
                            Rp<br>450.000
                        </td>
                        <td class="px-6 py-5">
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold bg-[#E8F3E9] text-[#2E6B34]">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#2E6B34] mr-1.5"></span>
                                Dikonfirmasi
                            </span>
                        </td>
                        <td class="px-6 py-5 text-center">
                            <button class="text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 10a2 2 0 110 4 2 2 0 010-4zm0-6a2 2 0 110 4 2 2 0 010-4zm0 12a2 2 0 110 4 2 2 0 010-4z"></path></svg>
                            </button>
                        </td>
                    </tr>

                    <!-- Row 2: Selesai -->
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-5 font-bold text-gray-900">
                            #BKG-<br>2398
                        </td>
                        <td class="px-6 py-5">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-gray-200 text-gray-600 flex items-center justify-center font-bold text-xs mr-3 shrink-0">
                                    SN
                                </div>
                                <span class="font-medium text-gray-700">Siti<br>Nurhaliza</span>
                            </div>
                        </td>
                        <td class="px-6 py-5 text-gray-500 leading-relaxed">
                            Sepatu<br>Gunung<br>Consina 42
                        </td>
                        <td class="px-6 py-5">
                            <span class="text-gray-600 block">10 Oct - 11<br>Oct 2024</span>
                            <span class="text-gray-400 text-xs mt-1 block">1 Day</span>
                        </td>
                        <td class="px-6 py-5 font-bold text-[#1B3C20]">
                            Rp<br>50.000
                        </td>
                        <td class="px-6 py-5">
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold bg-gray-100 text-gray-600 border border-gray-200">
                                <svg class="w-3 h-3 mr-1.5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Selesai
                            </span>
                        </td>
                        <td class="px-6 py-5 text-center">
                            <button class="text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 10a2 2 0 110 4 2 2 0 010-4zm0-6a2 2 0 110 4 2 2 0 010-4zm0 12a2 2 0 110 4 2 2 0 010-4z"></path></svg>
                            </button>
                        </td>
                    </tr>

                    <!-- Row 3: Terlambat -->
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-5 font-bold text-gray-900">
                            #BKG-<br>2395
                        </td>
                        <td class="px-6 py-5">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-[#4A4A4A] text-white flex items-center justify-center font-bold text-xs mr-3 shrink-0">
                                    DR
                                </div>
                                <span class="font-medium text-gray-700">Doni Rifki</span>
                            </div>
                        </td>
                        <td class="px-6 py-5 text-gray-500 leading-relaxed">
                            Set Alat<br>Masak +<br>Nesting
                        </td>
                        <td class="px-6 py-5">
                            <span class="text-gray-600 block">08 Oct -<br>10 Oct<br>2024</span>
                            <span class="text-red-600 font-bold text-xs mt-1 block">+2 Days<br>Overdue</span>
                        </td>
                        <td class="px-6 py-5 font-bold text-[#1B3C20]">
                            Rp<br>120.000
                        </td>
                        <td class="px-6 py-5">
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold bg-[#FEE2E2] text-[#DC2626]">
                                <svg class="w-3 h-3 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                                Terlambat
                            </span>
                        </td>
                        <td class="px-6 py-5 text-center">
                            <button class="text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 10a2 2 0 110 4 2 2 0 010-4zm0-6a2 2 0 110 4 2 2 0 010-4zm0 12a2 2 0 110 4 2 2 0 010-4z"></path></svg>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="px-6 py-4 border-t border-gray-200 flex items-center justify-between">
                <p class="text-sm text-gray-500">
                    Showing 1 to 3 of 124 bookings
                </p>
                <div class="flex items-center space-x-2">
                    <button class="px-2 py-1.5 border border-gray-300 rounded-md text-gray-400 hover:text-gray-600 hover:bg-gray-50 transition bg-white shadow-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                    <button class="px-2 py-1.5 border border-gray-300 rounded-md text-gray-400 hover:text-gray-600 hover:bg-gray-50 transition bg-white shadow-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                </div>
            </div>
        </div>
    </main>

</body>
</html>