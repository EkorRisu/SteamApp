<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PembelianController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GameController;

Route::get('/', fn() => view('welcome'))->name('welcome');

// Rute autentikasi bawaan Laravel
Auth::routes();

// Rute untuk login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

// Rute untuk logout
Route::post('/logout', [LogoutController::class, 'signout'])->name('logout');

// Rute untuk register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

// Rute untuk user biasa
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

// Rute untuk admin
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});

//produk admin
Route::middleware(['auth'])->group(function () {
    Route::get('/produk', [ProdukController::class, 'index'])->name('adminHome');
    Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
    Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');
    Route::get('/produk/{id}', [ProdukController::class, 'show'])->name('produk.show');
    Route::get('/produk/{id}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
    Route::put('/produk/{id}', [ProdukController::class, 'update'])->name('produk.update');
    Route::delete('/produk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');
});

//kategori
Route::resource('kategori', KategoriController::class);

// Rute untuk transaksi
Route::post('/transaksi/beli', [PembelianController::class, 'beli'])->name('transaksi.beli');
Route::post('/bayar', [PembelianController::class, 'bayar'])->name('transaksi.bayar');
Route::get('/cart', [PembelianController::class, 'transaksiCart'])->name('transaksi.cart');
Route::get('/transaksi/{id}/clearcart', [PembelianController::class, 'clearcart'])->name('transaksi.clearcart');
Route::get('/transaksi2', [PembelianController::class, 'transaksiIndex'])->name('transaksi.transaksi');
Route::delete('/transaksi/{id}', [PembelianController::class, 'hapus'])->name('transaksi.hapus');
Route::post('/transaksi/{id}/batal', [PembelianController::class, 'batal'])->name('transaksi.batal');
Route::delete('/transaksi/user/{id}', [PembelianController::class, 'clear'])->name('transaksi.clear');
Route::post('/transaksi/konfirmasi/{id}', [PembelianController::class, 'konfirmasiStatus'])->name('transaksi.konfirmasi');
Route::get('/transaksi/cetak/{id}', [PembelianController::class, 'generatePdf'])->name('transaksi.cetak');
Route::get('/transaksi/transaksiManager', [PembelianController::class, 'transaksiIndexManager'])->name('transaksi.transaksiManager');


//library
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/library', [PembelianController::class, 'library'])->name('transaksi.library');
    Route::get('/library/mainkan/{id}', [PembelianController::class, 'mainkan'])->name('user.library.play');
    Route::get('/library/download/{id}', [PembelianController::class, 'downloadGame'])->name('user.library.download');
});
Route::delete('/library/{id}/delete', [PembelianController::class, 'hapusDariLibrary'])->name('user.library.delete');

// Rute untuk menambah produk ke keranjang
Route::middleware(['auth'])->group(function () {
    // Add to cart route harus menggunakan POST
    Route::post('/cart/add', [PembelianController::class, 'beli'])->name('transaksi.beli');
});

// Tambahkan di dalam route group user
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/games/upload', [GameController::class, 'create'])->name('games.create');
    Route::post('/games/store', [GameController::class, 'store'])->name('games.store');
});
