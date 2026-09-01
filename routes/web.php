<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'landingPage'])->name('landing');
Route::get('/katalog', [PublicController::class, 'katalog'])->name('katalog');
Route::get('/katalog/{category:slug}', [PublicController::class, 'katalogByCategory'])->name('katalog.category');
Route::get('/produk/{product:slug}', [PublicController::class, 'detailProduk'])->name('produk.detail');
Route::get('/peraturan-sewa', [PublicController::class, 'peraturanSewa'])->name('peraturan');
Route::get('/denda', [PublicController::class, 'adminDenda'])->name('denda');
Route::get('/tentang-kami', [PublicController::class, 'tentangKami'])->name('tentang');
Route::get('/kontak', [PublicController::class, 'kontak'])->name('kontak');

Route::get('/keranjang', [PublicController::class, 'keranjang'])->name('keranjang');
Route::post('/keranjang/tambah/{product}', [PublicController::class, 'tambahKeranjang'])->name('keranjang.tambah');
Route::post('/keranjang/update/{id}', [PublicController::class, 'updateKeranjang'])->name('keranjang.update');
Route::post('/keranjang/hapus/{id}', [PublicController::class, 'hapusKeranjang'])->name('keranjang.hapus');
Route::post('/keranjang/checkout', [BookingController::class, 'checkoutKeranjang'])->name('keranjang.checkout');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
Route::get('/booking/sukses/{code}', [BookingController::class, 'success'])->name('booking.success');
Route::post('/midtrans/notification', [BookingController::class, 'handleNotification'])->name('midtrans.notification');
Route::post('/admin/booking/sync', [BookingController::class, 'syncMidtrans'])->name('admin.booking.sync');

Route::get('/admin/login', [PublicController::class, 'adminLogin'])->name('admin.login');
Route::post('/admin/login', [PublicController::class, 'adminLoginSubmit'])->name('admin.login.submit');
Route::get('/admin/dashboard', [PublicController::class, 'adminDashboard'])->name('admin.dashboard');
Route::get('/admin/produk', [PublicController::class, 'adminProduk'])->name('admin.produk');
Route::get('/admin/produk/create', [PublicController::class, 'adminProdukCreate'])->name('admin.produk.create');
Route::post('/admin/produk', [PublicController::class, 'adminProdukStore'])->name('admin.produk.store');
Route::get('/admin/produk/{product}/edit', [PublicController::class, 'adminProdukEdit'])->name('admin.produk.edit');
Route::put('/admin/produk/{product}', [PublicController::class, 'adminProdukUpdate'])->name('admin.produk.update');
Route::delete('/admin/produk/{product}', [PublicController::class, 'adminProdukDelete'])->name('admin.produk.delete');
Route::get('/admin/booking', [PublicController::class, 'adminBooking'])->name('admin.booking');
Route::get('/admin/transaksi', [PublicController::class, 'adminTransaksi'])->name('admin.transaksi');
Route::patch('/admin/booking/{booking}/status', [PublicController::class, 'updateBookingStatus'])->name('admin.booking.updateStatus');
Route::delete('/admin/booking/{booking}', [PublicController::class, 'adminBookingDelete'])->name('admin.booking.delete');
Route::post('/admin/fine', [PublicController::class, 'storeFine'])->name('admin.fine.store');
Route::get('/admin/denda', [PublicController::class, 'adminDenda'])->name('admin.denda');
