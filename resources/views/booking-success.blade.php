<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Berhasil - Twenty Nine Adventure</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">
    <main class="max-w-3xl mx-auto px-4 py-20 text-center">
        <div class="bg-white p-10 rounded-2xl shadow-sm border border-gray-100">
            <div class="w-20 h-20 bg-green-100 text-green-800 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            </div>

            <h1 class="text-3xl font-bold text-gray-900 mb-4">Booking Berhasil!</h1>
            <p class="text-gray-600 mb-2">Terima kasih telah memesan. Kode booking Anda adalah:</p>
            <strong class="text-2xl text-green-800 block mb-4">{{ $booking->booking_code }}</strong>

            <div class="bg-gray-50 border border-gray-100 rounded-xl p-4 mb-6 text-left">
                <h3 class="text-sm font-semibold text-gray-700 mb-2">Ringkasan Pemesanan</h3>
                <div class="text-xs text-gray-600 space-y-2">
                    <p><span class="font-medium text-gray-800">Nama:</span> {{ $booking->customer_name }}</p>
                    <p><span class="font-medium text-gray-800">Telepon:</span> {{ $booking->customer_phone }}</p>
                    <p><span class="font-medium text-gray-800">Durasi:</span> {{ \Carbon\Carbon::parse($booking->rental_date)->diffInDays(\Carbon\Carbon::parse($booking->return_date)) }} hari</p>
                    <p><span class="font-medium text-gray-800">Total Harga:</span> Rp {{ number_format($booking->total_price, 0, ',', '.') }}</p>
                    <p><span class="font-medium text-gray-800">Status:</span>
                        <span class="px-2 py-1 rounded text-xs font-semibold
                            @if($booking->status === 'confirmed') bg-green-100 text-green-700
                            @elseif($booking->status === 'paid') bg-blue-100 text-blue-700
                            @else bg-yellow-100 text-yellow-700 @endif">
                            {{ ucfirst($booking->status) }}
                        </span>
                    </p>
                </div>
            </div>

            @if ($snapToken)
                <div id="payment-button-container" class="mb-4">
                    <button id="pay-button"
                        class="w-full bg-green-800 text-white font-semibold py-3 rounded-lg hover:bg-green-900 transition flex justify-center items-center gap-2 shadow-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v-3m0 0l-3 3m3-3 3 3"></path></svg>
                        Bayar Sekarang dengan Midtrans
                    </button>
                </div>
            @endif

            <p class="text-[10px] text-gray-400">
                Status pembayaran akan otomatis terupdate setelah transaksi selesai.
            </p>

            <a href="{{ route('landing') }}" class="inline-block mt-6 bg-green-800 text-white font-semibold px-6 py-3 rounded-lg hover:bg-green-900 transition">
                Kembali ke Home
            </a>
        </div>
    </main>

    @if ($snapToken)
        <script src="https://app.sandbox.midtrans.com/snap/snap.js"
                data-client-key="{{ config('services.midtrans.client_key') }}"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var payButton = document.getElementById('pay-button');
                if (payButton) {
                    payButton.addEventListener('click', function () {
                        snap.pay('{{ $snapToken }}', {
                            onSuccess: function (result) {
                                window.location.href = "{{ route('booking.success', $booking->booking_code) }}";
                            },
                            onPending: function (result) {
                                alert('Pembayaran Anda sedang diproses. Silakan selesaikan pembayaran.');
                                window.location.href = "{{ route('booking.success', $booking->booking_code) }}";
                            },
                            onError: function (result) {
                                alert('Pembayaran gagal. Silakan coba lagi.');
                            },
                            onClose: function (result) {
                                alert('Anda menutup jendela pembayaran.');
                            }
                        });
                    });
                }
            });
        </script>
    @endif
</body>
</html>
