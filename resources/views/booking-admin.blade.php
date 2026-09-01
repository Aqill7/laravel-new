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
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-2.5 text-gray-600 hover:bg-gray-200 rounded-lg transition-colors font-medium text-sm">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                    </svg>
                    Dashboard
                </a>
                <!-- Active State -->
                <a href="{{ route('admin.booking') }}" class="flex items-center px-4 py-2.5 text-gray-900 bg-gray-100/50 font-bold rounded-lg transition-colors text-sm">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    Booking
                </a>
                <a href="{{ route('admin.produk') }}" class="flex items-center px-4 py-2.5 text-gray-600 hover:bg-gray-200 rounded-lg transition-colors font-medium text-sm">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                    Produk
                </a>
            </nav>
        </div>

        <div class="p-6 border-t border-gray-200">
            <nav class="space-y-1">
                <a href="{{ route('admin.login') }}" class="flex items-center px-4 py-2 text-red-500 hover:bg-red-50 rounded-lg transition-colors font-bold text-sm">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                    Keluar
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
                    <p class="text-gray-500 text-sm">Lihat dan kelola semua reservasi sewa.</p>
                </div>
                
                <form action="{{ route('admin.booking.sync') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="bg-[#1B3C20] hover:bg-[#254d2c] text-white px-5 py-2.5 rounded-lg flex items-center font-semibold text-sm shadow-sm transition-colors">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                        Sinkronisasi Status Midtrans
                    </button>
                </form>
            </div>
        </div>

        <!-- Table Container -->
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-[#F8F9FA] text-gray-500 text-xs font-bold uppercase tracking-wide border-b border-gray-200">
                        <th class="px-6 py-4 rounded-tl-xl w-32">No Booking</th>
                        <th class="px-6 py-4">Nama Penyewa</th>
                        <th class="px-6 py-4 w-56">Produk</th>
                        <th class="px-6 py-4">Tanggal</th>
                        <th class="px-6 py-4">Total</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4 text-center rounded-tr-xl w-32">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-sm text-gray-800 divide-y divide-gray-100">
                    @forelse($bookings as $booking)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-5 font-bold text-gray-900">
                            #{{ $booking->booking_code }}
                        </td>
                        <td class="px-6 py-5">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-blue-500 text-white flex items-center justify-center font-bold text-xs mr-3 shrink-0">
                                    {{ substr($booking->customer_name, 0, 2) }}
                                </div>
                                <span class="font-medium text-gray-700">{{ $booking->customer_name }}</span>
                            </div>
                        </td>
                        <td class="px-6 py-5 text-gray-500 leading-relaxed">
                            @foreach($booking->items as $item)
                                <span class="block">{{ $item->product->name }} x{{ $item->quantity }}</span>
                            @endforeach
                        </td>
                        <td class="px-6 py-5">
                            <span class="text-gray-600 block">{{ \Carbon\Carbon::parse($booking->rental_date)->format('d M') }} - {{ \Carbon\Carbon::parse($booking->return_date)->format('d M Y') }}</span>
                            <span class="text-gray-400 text-xs mt-1 block">{{ \Carbon\Carbon::parse($booking->rental_date)->diffInDays(\Carbon\Carbon::parse($booking->return_date)) }} Hari</span>
                        </td>
                        <td class="px-6 py-5 font-bold text-green-800">
                            Rp {{ number_format($booking->total_price, 0, ',', '.') }}
                        </td>
                        <td class="px-6 py-5">
@if($booking->status === 'confirmed')
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-700 mr-1.5"></span>
                                    Dikonfirmasi
                                </span>
                            @elseif($booking->status === 'rented')
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold bg-blue-100 text-blue-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-blue-700 mr-1.5"></span>
                                    Diambil
                                </span>
                            @elseif($booking->status === 'completed')
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold bg-gray-100 text-gray-600">
                                    <svg class="w-3 h-3 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4 L19 7"></path></svg>
                                    Dikembalikan
                                </span>
                            @elseif($booking->status === 'cancelled')
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold bg-red-100 text-red-700">
                                    <svg class="w-3 h-3 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                    Dibatalkan
                                </span>
                            @else
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold bg-yellow-100 text-yellow-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-yellow-700 mr-1.5"></span>
                                    Menunggu
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-5 text-center">
                            <div class="flex justify-center gap-2">
                                <button onclick="openDetailModal({{ json_encode(['booking_code' => $booking->booking_code, 'customer_name' => $booking->customer_name, 'customer_phone' => $booking->customer_phone, 'customer_address' => $booking->customer_address, 'rental_date' => $booking->rental_date, 'return_date' => $booking->return_date, 'total_price' => $booking->total_price, 'status' => $booking->status, 'payment_status' => $booking->payment_status, 'items' => $booking->items->map(fn($i) => ['product' => $i->product->name, 'quantity' => $i->quantity, 'price' => $i->price_per_day, 'subtotal' => $i->subtotal])->toArray()]) }})" class="text-blue-600 hover:text-blue-800" title="Detail">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                </button>
                                <button onclick="openStatusModal({{ $booking->id }}, '{{ $booking->booking_code }}', '{{ $booking->status }}')" class="text-green-600 hover:text-green-800" title="Update Status">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                                </button>
                                <form id="deleteForm-{{ $booking->id }}" action="{{ route('admin.booking.delete', $booking) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" onclick="openDeleteModal('{{ $booking->booking_code }}', {{ $booking->id }})" class="text-red-600 hover:text-red-800" title="Hapus">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.971-1.858L5 7m5 5v6m4-6v6m1-10V4a1 1 0 00-1-1h-2a1 1 0 00-1 1v3m-4 0h6"/></svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="px-6 py-8 text-center text-gray-500">Belum ada data booking.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="px-6 py-4 border-t border-gray-200 flex items-center justify-between">
                <p class="text-sm text-gray-500">
                    Showing {{ $bookings->firstItem() ?? 0 }} to {{ $bookings->lastItem() ?? 0 }} of {{ $bookings->total() }} booking
                </p>
                <div>
                    {{ $bookings->links() }}
                </div>
            </div>
        </div>
    </main>

    <!-- Detail Modal -->
    <div id="detailModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white rounded-xl p-6 max-w-lg w-full mx-4">
            <h3 class="text-xl font-bold mb-4">Detail Booking</h3>
            <div id="detailContent" class="space-y-3 text-sm mb-4 max-h-96 overflow-y-auto"></div>
            <button onclick="closeDetailModal()" class="w-full bg-gray-300 text-gray-800 font-semibold py-2 rounded-lg hover:bg-gray-400 transition">Tutup</button>
        </div>
    </div>

    <!-- Status Update Modal -->
    <div id="statusModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 transition-opacity duration-300">
        <div class="bg-white rounded-xl p-6 max-w-md w-full mx-4 transform transition-all duration-300 scale-95 opacity-0" id="statusModalCard">
            <h3 class="text-xl font-bold mb-4">Ubah Status Booking</h3>
            <form id="statusForm" method="POST" class="space-y-4">
                @csrf
                @method('PATCH')
                <div>
                    <label class="block text-sm font-medium mb-2">Status Baru</label>
                    <select name="status" class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm">
                                <option value="pending">Menunggu (Pending)</option>
                                <option value="confirmed">Dikonfirmasi (Confirmed)</option>
                                <option value="rented">Diambil (Taken)</option>
                                <option value="completed">Dikembalikan (Returned)</option>
                                <option value="cancelled">Dibatalkan (Cancelled)</option>
                    </select>
                </div>
                <div class="flex gap-2">
                    <button type="submit" class="flex-1 bg-green-800 text-white font-semibold py-2 rounded-lg hover:bg-green-900 transition">Simpan</button>
                    <button type="button" onclick="closeStatusModal()" class="flex-1 bg-gray-300 text-gray-800 font-semibold py-2 rounded-lg hover:bg-gray-400 transition">Batal</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 transition-opacity duration-300">
        <div class="bg-white rounded-xl p-6 max-w-sm w-full mx-4 text-center transform transition-all duration-300 scale-95 opacity-0 shadow-xl" id="deleteModalCard">
            <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4 text-red-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
            </div>
            <h3 class="text-lg font-bold text-gray-900 mb-2">Konfirmasi Hapus</h3>
            <p class="text-sm text-gray-600 mb-6" id="deleteModalText">Apakah Anda yakin ingin menghapus booking ini?</p>
            <div class="flex gap-3">
                <button type="button" onclick="closeDeleteModal()" class="flex-1 bg-gray-200 text-gray-800 font-semibold py-2 rounded-lg hover:bg-gray-300 transition text-sm">Batal</button>
                <button type="button" id="confirmDeleteBtn" class="flex-1 bg-red-600 text-white font-semibold py-2 rounded-lg hover:bg-red-700 transition text-sm">Hapus</button>
            </div>
        </div>
    </div>



            <script>
                function openDetailModal(data) {
                    let itemsHtml = '';
                    data.items.forEach(item => {
                        itemsHtml += `<p><strong>${item.product}</strong> x${item.quantity} - Rp ${parseInt(item.subtotal).toLocaleString('id-ID')}</p>`;
                    });
                    
                    let paymentLabel = 'Menunggu';
                    let paymentClass = 'text-yellow-600';
                    
                    if (data.payment_status === 'capture' || data.payment_status === 'settlement') {
                        paymentLabel = 'Berhasil';
                        paymentClass = 'text-green-600';
                    } else if (data.payment_status === 'expire') {
                        paymentLabel = 'Kadaluarsa';
                        paymentClass = 'text-red-600';
                    } else if (data.payment_status === 'cancel') {
                        paymentLabel = 'Dibatalkan';
                        paymentClass = 'text-red-600';
                    } else if (data.payment_status === 'deny') {
                        paymentLabel = 'Ditolak';
                        paymentClass = 'text-red-600';
                    } else if (data.payment_status === 'pending') {
                        paymentLabel = 'Menunggu Pembayaran';
                        paymentClass = 'text-yellow-600';
                    }

                    let statusText = data.status;
                    if (data.status === 'confirmed') statusText = 'Dikonfirmasi';
                    else if (data.status === 'rented') statusText = 'Diambil';
                    else if (data.status === 'completed') statusText = 'Dikembalikan';
                    else if (data.status === 'cancelled') statusText = 'Dibatalkan';
                    else if (data.status === 'pending') statusText = 'Menunggu';

                    document.getElementById('detailContent').innerHTML = `
                        <p><strong>Kode Booking:</strong> ${data.booking_code}</p>
                        <p><strong>Nama Penyewa:</strong> ${data.customer_name}</p>
                        <p><strong>No. Telepon:</strong> ${data.customer_phone}</p>
                        <p><strong>Alamat:</strong> ${data.customer_address}</p>
                        <p><strong>Tanggal Sewa:</strong> ${new Date(data.rental_date).toLocaleDateString('id-ID')} - ${new Date(data.return_date).toLocaleDateString('id-ID')}</p>
                        <p><strong>Total Harga:</strong> Rp ${parseInt(data.total_price).toLocaleString('id-ID')}</p>
                        <p><strong>Status Sewa:</strong> ${statusText}</p>
                        <p><strong>Status Pembayaran (Midtrans):</strong> <span class="${paymentClass} font-bold">${paymentLabel}</span></p>
                        <hr class="my-2">
                        <strong>Item Disewa:</strong>
                        ${itemsHtml}
                    `;
                    document.getElementById('detailModal').classList.remove('hidden');
                }
        function closeDetailModal() {
            document.getElementById('detailModal').classList.add('hidden');
        }
        function openStatusModal(bookingId, code, status) {
            document.getElementById('statusForm').action = `/admin/booking/${bookingId}/status`;
            document.querySelector('#statusForm select[name="status"]').value = status;
            const modal = document.getElementById('statusModal');
            const card = document.getElementById('statusModalCard');
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                card.classList.remove('scale-95', 'opacity-0');
            }, 10);
        }
        function closeStatusModal() {
            const modal = document.getElementById('statusModal');
            const card = document.getElementById('statusModalCard');
            card.classList.add('scale-95', 'opacity-0');
            modal.classList.add('opacity-0');
            setTimeout(() => modal.classList.add('hidden'), 300);
        }
        function openDeleteModal(code, id) {
            document.getElementById('deleteModalText').textContent = 'Apakah Anda yakin ingin menghapus booking #' + code + '?';
            document.getElementById('confirmDeleteBtn').onclick = function() {
                document.getElementById('deleteForm-' + id).submit();
            };
            const modal = document.getElementById('deleteModal');
            const card = document.getElementById('deleteModalCard');
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                card.classList.remove('scale-95', 'opacity-0');
            }, 10);
        }
        function closeDeleteModal() {
            const modal = document.getElementById('deleteModal');
            const card = document.getElementById('deleteModalCard');
            card.classList.add('scale-95', 'opacity-0');
            modal.classList.add('opacity-0');
            setTimeout(() => modal.classList.add('hidden'), 300);
        }
     </script>

</body>
</html>
