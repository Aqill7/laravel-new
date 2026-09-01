<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History - Twenty Nine Adventure</title>
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
            <div class="mb-10">
                <h1 class="text-2xl font-extrabold text-[#1B3C20] leading-tight">Twenty Nine<br>Adventure</h1>
                <p class="text-xs font-semibold text-gray-500 mt-1 uppercase tracking-wide">Admin Panel</p>
            </div>

            <nav class="space-y-1">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-2.5 text-gray-600 hover:bg-gray-200 rounded-lg transition-colors font-medium text-sm">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    Dashboard
                </a>
                <a href="{{ route('admin.booking') }}" class="flex items-center px-4 py-2.5 text-gray-600 hover:bg-gray-200 rounded-lg transition-colors font-medium text-sm">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    Booking
                </a>
                <a href="{{ route('admin.transaksi') }}" class="flex items-center px-4 py-2.5 text-gray-900 bg-gray-100/50 font-bold rounded-lg transition-colors text-sm">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Transaksi
                </a>
                <a href="{{ route('admin.produk') }}" class="flex items-center px-4 py-2.5 text-gray-600 hover:bg-gray-200 rounded-lg transition-colors font-medium text-sm">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                    Products
                </a>
            </nav>
        </div>

        <div class="p-6 border-t border-gray-200">
            <nav class="space-y-1">
                <a href="{{ route('admin.login') }}" class="flex items-center px-4 py-2 text-red-500 hover:bg-red-50 rounded-lg transition-colors font-bold text-sm">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                    Logout
                </a>
            </nav>
        </div>
    </aside>

    <main class="flex-1 p-10 overflow-y-auto bg-[#FAFAFA]">
        <div class="mb-8">
            <h2 class="text-4xl font-extrabold text-gray-900 tracking-tight mb-2">Riwayat Transaksi</h2>
            <p class="text-gray-500 text-sm">Kelola dan tinjau semua transaksi pembayaran.</p>
        </div>

        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-[#F8F9FA] text-gray-500 text-xs font-bold uppercase tracking-wide border-b border-gray-200">
                        <th class="px-6 py-4">No. Booking</th>
                        <th class="px-6 py-4">Penyewa</th>
                        <th class="px-6 py-4">Jumlah</th>
                        <th class="px-6 py-4">Tanggal & Waktu</th>
                        <th class="px-6 py-4">Status Pembayaran</th>
                        <th class="px-6 py-4">Status Booking</th>
                    </tr>
                </thead>
                <tbody class="text-sm text-gray-800 divide-y divide-gray-100">
                    @forelse($bookings as $booking)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-5 font-bold text-gray-900">#{{ $booking->booking_code }}</td>
                        <td class="px-6 py-5">{{ $booking->customer_name }}</td>
                        <td class="px-6 py-5 font-semibold text-green-800">Rp {{ number_format($booking->total_price, 0, ',', '.') }}</td>
                        <td class="px-6 py-5 text-gray-600 text-xs">
                            <span class="font-medium text-gray-900 block">{{ \Carbon\Carbon::parse($booking->created_at)->locale('id')->translatedFormat('l, d M Y') }}</span>
                            <span class="text-gray-400 mt-0.5 block">{{ \Carbon\Carbon::parse($booking->created_at)->format('H:i') }} WIB</span>
                        </td>
                        <td class="px-6 py-5">
                            @php
                                $paymentLabel = match($booking->payment_status) {
                                    'settlement', 'capture' => ['label' => 'Berhasil', 'color' => 'green'],
                                    'expire' => ['label' => 'Kadaluarsa', 'color' => 'red'],
                                    'cancel' => ['label' => 'Dibatalkan', 'color' => 'red'],
                                    'deny' => ['label' => 'Ditolak', 'color' => 'red'],
                                    'pending' => ['label' => 'Menunggu Pembayaran', 'color' => 'yellow'],
                                    default => ['label' => 'Menunggu', 'color' => 'yellow']
                                };
                            @endphp
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold bg-{{ $paymentLabel['color'] }}-100 text-{{ $paymentLabel['color'] }}-700">
                                {{ $paymentLabel['label'] }}
                            </span>
                        </td>
                        <td class="px-6 py-5">
                            @php
                                $statusLabel = match($booking->status) {
                                    'confirmed' => 'Dikonfirmasi',
                                    'rented' => 'Diambil',
                                    'completed' => 'Dikembalikan',
                                    'cancelled' => 'Dibatalkan',
                                    default => 'Menunggu'
                                };
                            @endphp
                            {{ $statusLabel }}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="px-6 py-8 text-center text-gray-500">Tidak ada data transaksi.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="px-6 py-4 border-t border-gray-200">{{ $bookings->links() }}</div>
        </div>
    </main>

</body>
</html>
