<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management - Twenty Nine Adventure</title>
    <!-- Tailwind CSS (Ganti dengan Vite/Mix di project Laravel Anda: @vite('resources/css/app.css')) -->
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
            <nav class="space-y-2">
                <a href="#" class="flex items-center px-4 py-2.5 text-gray-600 hover:bg-gray-200 rounded-lg transition-colors font-medium text-sm">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                    </svg>
                    Dashboard
                </a>
                <a href="#" class="flex items-center px-4 py-2.5 text-gray-600 hover:bg-gray-200 rounded-lg transition-colors font-medium text-sm">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    Booking
                </a>
                <a href="#" class="flex items-center px-4 py-2.5 bg-[#3D5A3A] text-white rounded-lg transition-colors font-medium text-sm shadow-sm">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                    Products
                </a>
            </nav>
        </div>

        <div class="p-6 border-t border-gray-200">
            <nav class="space-y-2">
                <a href="#" class="flex items-center px-4 py-2 text-gray-600 hover:bg-gray-200 rounded-lg transition-colors font-medium text-sm">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Settings
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-gray-600 hover:bg-gray-200 rounded-lg transition-colors font-medium text-sm">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                    Logout
                </a>
            </nav>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-10 overflow-y-auto">
        
        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 gap-4">
            <div>
                <h2 class="text-4xl font-extrabold text-gray-900 tracking-tight mb-2">Product<br>Management</h2>
                <p class="text-gray-500">Manage your rental inventory.</p>
            </div>
            
            <div class="flex items-center space-x-4">
                <!-- Search -->
                <div class="relative">
                    <svg class="w-4 h-4 absolute left-3 top-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <input type="text" placeholder="Search products..." class="pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-1 focus:ring-[#1A371F] focus:border-[#1A371F] w-64 shadow-sm">
                </div>
                
                <!-- Add Button -->
                <button class="bg-[#1A371F] hover:bg-[#254d2c] text-white px-5 py-2.5 rounded-lg flex items-center font-semibold text-sm shadow-sm transition-colors">
                    <span class="mr-2">+</span> Tambah Produk
                </button>
            </div>
        </div>

        <!-- Table Container -->
        <div class="bg-white border border-gray-100 rounded-xl shadow-[0_2px_10px_-3px_rgba(6,81,237,0.05)] overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-[#F8F9FA] text-gray-500 text-sm font-semibold border-b border-gray-100">
                        <th class="px-6 py-4 rounded-tl-xl">Image</th>
                        <th class="px-6 py-4">Name</th>
                        <th class="px-6 py-4">Category</th>
                        <th class="px-6 py-4">Price/Day</th>
                        <th class="px-6 py-4">Stock</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4 text-center rounded-tr-xl">Action</th>
                    </tr>
                </thead>
                <tbody class="text-sm text-gray-800 divide-y divide-gray-100">
                    
                    <!-- Row 1 -->
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="w-12 h-12 bg-gray-100 border border-gray-200 rounded-lg flex items-center justify-center overflow-hidden">
                                <!-- Ganti dengan asset() atau Storage::url() di Laravel -->
                                <img src="https://placehold.co/100x100?text=Bag" alt="Product" class="object-cover w-full h-full opacity-70">
                            </div>
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900 w-48">Deuter Aircontact Lite 50+10</td>
                        <td class="px-6 py-4 text-gray-500">Carrier</td>
                        <td class="px-6 py-4">Rp 45.000</td>
                        <td class="px-6 py-4 text-gray-700">12</td>
                        <td class="px-6 py-4">
                            <span class="bg-[#F3F6E9] text-[#556934] text-xs font-bold px-3 py-1.5 rounded-md">Available</span>
                        </td>
                        <td class="px-6 py-4 text-center space-x-2">
                            <button class="text-gray-400 hover:text-gray-600 transition-colors">
                                <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                            </button>
                            <button class="text-gray-400 hover:text-red-500 transition-colors">
                                <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </td>
                    </tr>

                    <!-- Row 2 -->
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="w-12 h-12 bg-gray-100 border border-gray-200 rounded-lg flex items-center justify-center overflow-hidden">
                                <img src="https://placehold.co/100x100?text=Tent" alt="Product" class="object-cover w-full h-full opacity-70">
                            </div>
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900 w-48">Naturehike Cloud Up 2</td>
                        <td class="px-6 py-4 text-gray-500">Tent</td>
                        <td class="px-6 py-4">Rp 35.000</td>
                        <td class="px-6 py-4 text-gray-700">8</td>
                        <td class="px-6 py-4">
                            <span class="bg-[#F3F6E9] text-[#556934] text-xs font-bold px-3 py-1.5 rounded-md">Available</span>
                        </td>
                        <td class="px-6 py-4 text-center space-x-2">
                            <button class="text-gray-400 hover:text-gray-600 transition-colors"><svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg></button>
                            <button class="text-gray-400 hover:text-red-500 transition-colors"><svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg></button>
                        </td>
                    </tr>

                    <!-- Row 3 -->
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="w-12 h-12 bg-gray-100 border border-gray-200 rounded-lg flex items-center justify-center overflow-hidden">
                                <img src="https://placehold.co/100x100?text=Poles" alt="Product" class="object-cover w-full h-full opacity-70">
                            </div>
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900 w-48">Black Diamond Trail Trekking Poles</td>
                        <td class="px-6 py-4 text-gray-500">Accessories</td>
                        <td class="px-6 py-4">Rp 15.000</td>
                        <td class="px-6 py-4 text-gray-700">0</td>
                        <td class="px-6 py-4">
                            <span class="bg-[#E5E7EB] text-gray-600 text-xs font-bold px-3 py-1.5 rounded-md">Out of Stock</span>
                        </td>
                        <td class="px-6 py-4 text-center space-x-2">
                            <button class="text-gray-400 hover:text-gray-600 transition-colors"><svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg></button>
                            <button class="text-gray-400 hover:text-red-500 transition-colors"><svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg></button>
                        </td>
                    </tr>

                    <!-- Row 4 -->
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="w-12 h-12 bg-gray-100 border border-gray-200 rounded-lg flex items-center justify-center overflow-hidden">
                                <img src="https://placehold.co/100x100?text=Bag" alt="Product" class="object-cover w-full h-full opacity-70">
                            </div>
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900 w-48">Eiger Sleep Sack 1000</td>
                        <td class="px-6 py-4 text-gray-500">Sleeping Bag</td>
                        <td class="px-6 py-4">Rp 20.000</td>
                        <td class="px-6 py-4 text-gray-700">25</td>
                        <td class="px-6 py-4">
                            <span class="bg-[#F3F6E9] text-[#556934] text-xs font-bold px-3 py-1.5 rounded-md">Available</span>
                        </td>
                        <td class="px-6 py-4 text-center space-x-2">
                            <button class="text-gray-400 hover:text-gray-600 transition-colors"><svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg></button>
                            <button class="text-gray-400 hover:text-red-500 transition-colors"><svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg></button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="px-6 py-4 border-t border-gray-100 flex items-center justify-between">
                <p class="text-sm text-gray-500">
                    Showing 1 to 4 of 24 entries
                </p>
                <div class="flex items-center space-x-1">
                    <button class="px-3 py-1 border border-gray-200 rounded text-gray-500 hover:bg-gray-50 transition text-sm">&lt;</button>
                    <button class="px-3 py-1 bg-[#1A371F] text-white rounded text-sm font-medium shadow-sm">1</button>
                    <button class="px-3 py-1 border border-gray-200 rounded text-gray-600 hover:bg-gray-50 transition text-sm font-medium">2</button>
                    <button class="px-3 py-1 border border-gray-200 rounded text-gray-600 hover:bg-gray-50 transition text-sm font-medium">3</button>
                    <span class="px-2 text-gray-400 text-sm">...</span>
                    <button class="px-3 py-1 border border-gray-200 rounded text-gray-500 hover:bg-gray-50 transition text-sm">&gt;</button>
                </div>
            </div>
        </div>
    </main>

</body>
</html>