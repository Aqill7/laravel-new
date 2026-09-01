<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Produk - Twenty Nine Adventure</title>
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
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-2.5 text-gray-600 hover:bg-gray-200 rounded-lg transition-colors font-medium text-sm">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                    </svg>
                    Dashboard
                </a>
                <a href="{{ route('admin.produk') }}" class="flex items-center px-4 py-2.5 bg-[#3D5A3A] text-white rounded-lg transition-colors font-medium text-sm shadow-sm">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                    Products
                </a>
                <a href="{{ route('admin.booking') }}" class="flex items-center px-4 py-2.5 text-gray-600 hover:bg-gray-200 rounded-lg transition-colors font-medium text-sm">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                    Booking
                </a>
            </nav>
        </div>

        <div class="p-6 border-t border-gray-200">
            <nav class="space-y-2">
                <a href="{{ route('admin.login') }}" class="flex items-center px-4 py-2 text-red-500 hover:bg-red-50 rounded-lg transition-colors font-bold text-sm">
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
                <p class="text-gray-500">Kelola inventaris sewa Anda.</p>
            </div>
            
            <div class="flex items-center space-x-4">
                <!-- Search -->
                <div class="relative">
                    <svg class="w-4 h-4 absolute left-3 top-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <input type="text" placeholder="Cari produk..." class="pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-1 focus:ring-[#1A371F] focus:border-[#1A371F] w-64 shadow-sm">
                </div>
                
                <!-- Add Button -->
                <a href="{{ route('admin.produk.create') }}" class="bg-[#1A371F] hover:bg-[#254d2c] text-white px-5 py-2.5 rounded-lg flex items-center font-semibold text-sm shadow-sm transition-colors">
                    <span class="mr-2">+</span> Tambah Produk
                </a>
            </div>
        </div>

        <!-- Table Container -->
        <div class="bg-white border border-gray-100 rounded-xl shadow-[0_2px_10px_-3px_rgba(6,81,237,0.05)] overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-[#F8F9FA] text-gray-500 text-sm font-semibold border-b border-gray-100">
                        <th class="px-6 py-4 rounded-tl-xl">Gambar</th>
                        <th class="px-6 py-4">Name</th>
                        <th class="px-6 py-4">Kategori</th>
                        <th class="px-6 py-4">Harga/Hari</th>
                        <th class="px-6 py-4">Stok</th>
                        <th class="px-6 py-4 text-center rounded-tr-xl">Action</th>
                    </tr>
                </thead>
                <tbody class="text-sm text-gray-800 divide-y divide-gray-100">
                    @foreach($products as $product)
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="w-12 h-12 bg-gray-100 border border-gray-200 rounded-lg flex items-center justify-center overflow-hidden">
                                @if($product->images->count() > 0)
                                    <img src="{{ asset('storage/' . $product->images->first()->image_path) }}" alt="{{ $product->name }}" class="object-cover w-full h-full">
                                @else
                                    <img src="https://placehold.co/100x100?text=Produk" alt="Produk" class="object-cover w-full h-full opacity-70">
                                @endif
                            </div>
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900 w-48">{{ $product->name }}</td>
                        <td class="px-6 py-4 text-gray-500">{{ $product->category->name ?? '-' }}</td>
                        <td class="px-6 py-4">Rp {{ number_format($product->price_per_day, 0, ',', '.') }}</td>
                        <td class="px-6 py-4 text-gray-700">{{ $product->stock }}</td>
<td class="px-6 py-4 text-center space-x-2">
                            <a href="{{ route('admin.produk.edit', $product->id) }}" class="text-gray-500 hover:text-[#1A371F] transition-colors">
                                <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                            </a>
                            <form id="delete-form-{{ $product->id }}" action="{{ route('admin.produk.delete', $product->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="confirmDelete('{{ $product->name }}', {{ $product->id }})" class="text-gray-400 hover:text-red-500 transition-colors">
                                    <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="px-6 py-4 border-t border-gray-100 flex items-center justify-between">
                <p class="text-sm text-gray-500">
                    Menampilkan {{ $products->count() }} produk
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

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center hidden transition-opacity duration-300 opacity-0">
        <div id="modalContent" class="bg-white rounded-xl p-6 max-w-sm w-full mx-4 shadow-2xl transform scale-95 transition-transform duration-300">
            <h3 class="text-lg font-bold text-gray-900 mb-2">Konfirmasi Hapus</h3>
            <p id="modalMessage" class="text-sm text-gray-600 mb-6">Apakah Anda yakin ingin menghapus produk ini?</p>
            <div class="flex justify-end space-x-3">
                <button onclick="closeModal()" class="px-4 py-2 border border-gray-300 rounded-lg text-sm text-gray-700 hover:bg-gray-50 font-medium">Batal</button>
                <button id="confirmDeleteBtn" class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg text-sm font-medium shadow-sm transition-colors">Hapus</button>
            </div>
        </div>
    </div>

    <script>
        let currentProductId = null;

        function confirmDelete(productName, productId) {
            currentProductId = productId;
            document.getElementById('modalMessage').textContent = `Apakah Anda yakin ingin menghapus produk "${productName}"?`;
            const modal = document.getElementById('deleteModal');
            const content = document.getElementById('modalContent');
            
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                content.classList.remove('scale-95');
            }, 10);
        }

        function closeModal() {
            const modal = document.getElementById('deleteModal');
            const content = document.getElementById('modalContent');
            
            modal.classList.add('opacity-0');
            content.classList.add('scale-95');
            setTimeout(() => {
                modal.classList.add('hidden');
                currentProductId = null;
            }, 300);
        }

        document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
            if (currentProductId) {
                document.getElementById('delete-form-' + currentProductId).submit();
            }
        });
    </script>
</body>
</html>