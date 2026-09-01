<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Keranjang - Twenty Nine Adventure</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes pulse-update {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.7; transform: scale(1.05); }
        }
        .pulse-update { animation: pulse-update 0.6s ease-in-out; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- Form hidden untuk submit otomatis -->
    <form id="cart-update-form" method="POST" style="display: none;"></form>

    <script>
        function increaseQtyCart(btn) {
            const input = btn.previousElementSibling;
            input.value = parseInt(input.value) + 1;
            updateCartTotal();
            input.form.submit();
        }

        function decreaseQtyCart(btn) {
            const input = btn.nextElementSibling;
            if (parseInt(input.value) > 1) {
                input.value = parseInt(input.value) - 1;
                updateCartTotal();
                input.form.submit();
            }
        }

        function updateCartTotal() {
            const rows = document.querySelectorAll('tbody tr');
            let grandTotal = 0;
            
            rows.forEach(row => {
                const priceText = row.children[1].textContent.replace('Rp ', '').replace(/\./g, '');
                const quantity = parseInt(row.querySelector('input[type="number"]').value) || 0;
                const price = parseInt(priceText) || 0;
                const itemTotal = price * quantity;
                
                const itemTotalSpan = row.querySelector('.total-item-price');
                if (itemTotalSpan) {
                    itemTotalSpan.textContent = (itemTotal).toLocaleString('id-ID');
                    itemTotalSpan.parentElement.classList.add('pulse-update');
                    setTimeout(() => itemTotalSpan.parentElement.classList.remove('pulse-update'), 600);
                }
                grandTotal += itemTotal;
            });
            
            const grandTotalSpan = document.getElementById('grand-total-price');
            if (grandTotalSpan) {
                grandTotalSpan.textContent = grandTotal.toLocaleString('id-ID');
                grandTotalSpan.parentElement.classList.add('pulse-update');
                setTimeout(() => grandTotalSpan.parentElement.classList.remove('pulse-update'), 600);
            }
        }
    </script>
    <!-- Navbar -->
    <nav class="bg-white border-b px-8 py-4 flex justify-between items-center sticky top-0 z-50">
        <div class="flex items-center gap-2">
            <button onclick="history.back()" class="mr-2 flex items-center justify-center w-8 h-8 rounded-lg hover:bg-gray-100 transition">
                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            </button>
            <span class="text-xl font-bold text-green-800">Twenty Nine Adventure</span>
        </div>
        <a href="{{ route('admin.login') }}" class="text-sm font-medium text-gray-600 hover:text-gray-900">Login</a>
    </nav>

    <div class="max-w-4xl mx-auto bg-white p-8 rounded-2xl shadow-sm m-8">
        <h1 class="text-2xl font-bold mb-6">Keranjang Belanja</h1>
        
        @if(session('success'))
            <div id="flash-message" class="bg-green-100 text-green-800 p-4 rounded-lg mb-6 text-sm font-medium animate-pulse">
                {{ session('success') }}
            </div>
            <script>
                setTimeout(() => {
                    document.getElementById('flash-message').classList.add('hidden');
                }, 3000);
            </script>
        @endif
        
        @if(session('keranjang'))
            <div class="overflow-x-auto mb-6">
                <table class="w-full text-sm">
                    <thead class="border-b text-left text-gray-500 text-xs">
                        <tr>
                            <th class="py-3 font-semibold">Produk</th>
                            <th class="py-3 font-semibold">Harga/Hari</th>
                            <th class="py-3 font-semibold">Jumlah</th>
                            <th class="py-3 font-semibold">Total</th>
                            <th class="py-3 font-semibold text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $grandTotal = 0; @endphp
                        @foreach(session('keranjang') as $id => $item)
                            @php $total = $item['price'] * $item['quantity']; $grandTotal += $total; @endphp
                            <tr class="border-b hover:bg-gray-50 transition">
                                <td class="py-4">{{ $item['name'] }}</td>
                                <td class="py-4">Rp {{ number_format($item['price'], 0, ',', '.') }}</td>
                                <td class="py-4">
                                    <form action="{{ route('keranjang.update', $id) }}" method="POST" class="flex items-center gap-1">
                                        @csrf
                                        <button type="button" class="w-8 h-8 bg-gray-200 hover:bg-gray-300 rounded text-sm font-bold" onclick="decreaseQtyCart(this)">−</button>
                                        <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" 
                                               oninput="updateCartTotal()"
                                               class="w-12 border rounded px-2 py-1 text-center text-xs" readonly>
                                        <button type="button" class="w-8 h-8 bg-gray-200 hover:bg-gray-300 rounded text-sm font-bold" onclick="increaseQtyCart(this)">+</button>
                                    </form>
                                </td>
                                <td class="py-4 font-semibold text-gray-800 transition-all duration-500 ease-in-out">
                                    Rp <span class="total-item-price">{{ number_format($total, 0, ',', '.') }}</span>
                                </td>
                                <td class="py-4 text-center">
                                    <form action="{{ route('keranjang.hapus', $id) }}" method="POST" class="inline">
                                        @csrf
                                        <button class="text-red-500 text-xs hover:text-red-700 font-medium">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div class="bg-gray-50 p-4 rounded-lg mb-8 text-right transition-all duration-500 ease-in-out">
                <p class="text-lg font-bold text-green-800">Total: Rp <span id="grand-total-price">{{ number_format($grandTotal, 0, ',', '.') }}</span></p>
            </div>

            <div class="border-t pt-8">
                <h2 class="text-xl font-bold mb-6">Data Sewa & Penyewa</h2>
                <form action="{{ route('keranjang.checkout') }}" method="POST" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium mb-1">Tanggal Ambil</label>
                            <input type="date" id="rentalDate" name="rental_date" class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-green-800" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">Tanggal Pengembalian</label>
                            <input type="date" id="returnDate" name="return_date" class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-green-800" required>
                        </div>
                    </div>

                    <script>
                        document.getElementById('rentalDate').addEventListener('change', calculateRentalPrice);
                        document.getElementById('returnDate').addEventListener('change', calculateRentalPrice);

                        function calculateRentalPrice() {
                            const rentalDate = document.getElementById('rentalDate').value;
                            const returnDate = document.getElementById('returnDate').value;

                            if (!rentalDate || !returnDate) return;

                            const start = new Date(rentalDate);
                            const end = new Date(returnDate);
                            const diffTime = end - start;
                            const days = Math.ceil(diffTime / (1000 * 60 * 60 * 24)) || 1;

                            const rows = document.querySelectorAll('tbody tr');
                            let grandTotal = 0;

                            rows.forEach(row => {
                                const priceText = row.children[1].textContent.replace('Rp ', '').replace(/\./g, '');
                                const quantity = parseInt(row.querySelector('input[type="number"]').value) || 0;
                                const pricePerDay = parseInt(priceText) || 0;
                                const itemTotal = pricePerDay * quantity * days;

                                const itemTotalSpan = row.querySelector('.total-item-price');
                                if (itemTotalSpan) {
                                    itemTotalSpan.textContent = itemTotal.toLocaleString('id-ID');
                                }
                                grandTotal += itemTotal;
                            });

                            const grandTotalSpan = document.getElementById('grand-total-price');
                            if (grandTotalSpan) {
                                grandTotalSpan.textContent = grandTotal.toLocaleString('id-ID');
                            }

                            const paymentTotalSpan = document.getElementById('payment-total-price');
                            if (paymentTotalSpan) {
                                paymentTotalSpan.textContent = grandTotal.toLocaleString('id-ID');
                            }
                        }
                    </script>
                    <div>
                        <label class="block text-sm font-medium mb-1">Nama Lengkap</label>
                        <input type="text" name="customer_name" placeholder="Masukkan nama lengkap" class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-green-800" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">No. WhatsApp</label>
                        <input type="text" name="customer_phone" placeholder="08xxxxxxxxxx" class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-green-800" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Email</label>
                        <input type="email" name="email" placeholder="email@example.com" class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-green-800" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Alamat Lengkap</label>
                        <textarea name="customer_address" placeholder="Masukkan alamat domisili" class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-green-800 resize-none" rows="3" required></textarea>
                    </div>
                    <div class="bg-green-50 p-4 rounded-lg">
                        <p class="text-sm text-green-800 font-semibold">Total Pembayaran: Rp <span id="payment-total-price">{{ number_format($grandTotal, 0, ',', '.') }}</span></p>
                    </div>
                    <button type="submit" class="w-full bg-green-800 text-white font-semibold py-3 rounded-lg hover:bg-green-900 transition">Lanjut ke Pembayaran</button>
                </form>
            </div>
        @else
            <div class="text-center py-12">
                <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                <p class="text-gray-500 text-lg mb-4">Keranjang Anda kosong</p>
                <a href="{{ route('katalog') }}" class="inline-block bg-green-800 text-white px-6 py-2 rounded-lg hover:bg-green-900 transition">Mulai Berbelanja</a>
            </div>
        @endif
    </div>
</body>
</html>
