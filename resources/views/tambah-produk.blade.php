<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk - Twenty Nine Adventure</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-gray-50 text-gray-800 flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside class="w-64 flex-shrink-0 bg-[#F8F9FA] border-r border-gray-200 flex flex-col justify-between">
        <div class="p-6">
            <div class="mb-10">
                <h1 class="text-2xl font-extrabold text-[#1B3C20] leading-tight">Twenty Nine<br>Adventure</h1>
                <p class="text-xs font-semibold text-gray-500 mt-1 uppercase tracking-wide">Admin Panel</p>
            </div>
            <nav class="space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-2.5 text-gray-600 hover:bg-gray-200 rounded-lg transition-colors font-medium text-sm">Dashboard</a>
                <a href="{{ route('admin.produk') }}" class="flex items-center px-4 py-2.5 bg-[#3D5A3A] text-white rounded-lg transition-colors font-medium text-sm shadow-sm">Produk</a>
            </nav>
        </div>
    </aside>

    <main class="flex-1 p-10 overflow-y-auto">
        <div class="max-w-xl bg-white border border-gray-200 rounded-xl p-8 shadow-sm">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Tambah Produk Baru</h2>

            @if ($errors->any())
                <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg">
                    <p class="text-sm font-medium text-red-800 mb-2">Terjadi kesalahan:</p>
                    <ul class="text-sm text-red-700 space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>• {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nama Produk</label>
                    <input type="text" name="name" required class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-[#1A371F]">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
                    <select name="category_id" required class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-[#1A371F]">
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Harga / Hari (Rp)</label>
                        <input type="text" id="priceDisplay" required class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-[#1A371F]" oninput="formatPrice(this)" placeholder="Contoh: 50.000">
                        <input type="hidden" id="priceReal" name="price_per_day">
                    </div>

                <script>
                    function formatPrice(input) {
                        let value = input.value.replace(/\D/g, '');
                        if (value === "") {
                            input.value = "";
                            document.getElementById('priceReal').value = "";
                            return;
                        }
                        let formatted = new Intl.NumberFormat('id-ID').format(value);
                        input.value = formatted;
                        document.getElementById('priceReal').value = value;
                    }
                </script>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Stok</label>
                        <input type="number" name="stock" required class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-[#1A371F]">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Produk (Tampil di Tab Deskripsi bawah)</label>
                    <textarea name="description" rows="5" class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-[#1A371F]" placeholder="Masukkan deskripsi produk..."></textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Gambar Produk (Maksimal 4 Foto)</label>
                    <input type="file" name="images[]" accept="image/*" multiple class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-[#1A371F]">
                    <p class="text-xs text-gray-500 mt-1">Anda dapat memilih hingga 4 foto sekaligus untuk detail produk.</p>
                </div>

                <div class="flex justify-end gap-3 pt-4">
                    <a href="{{ route('admin.produk') }}" class="px-4 py-2 border rounded-lg text-sm text-gray-600 hover:bg-gray-50">Batal</a>
                    <button type="submit" class="bg-[#1A371F] text-white px-5 py-2 rounded-lg text-sm font-semibold hover:bg-[#254d2c]">Simpan Produk</button>
                </div>
            </form>
        </div>
    </main>

</body>
</html>
