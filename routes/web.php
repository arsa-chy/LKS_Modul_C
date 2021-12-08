<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\Controller;

use App\Http\Controllers\NewProdukController;
use App\Http\Controllers\NewKategoriController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Controller::class, 'index']);
Route::post('/cart', [Controller::class, 'hitungJumlah'])->name('hitungJumlah');

Route::get('/produk', [NewProdukController::class, 'index'])->name('produkShow');
Route::get('/produk/delete/{id}', [NewProdukController::class, 'destroy'])->name('produkDelete');
Route::get('/produk/create', [NewProdukController::class, 'create'])->name('produkCreate');
Route::post('/produk/store', [NewProdukController::class, 'store'])->name('produkStore');
Route::get('/produk/edit/{id}', [NewProdukController::class, 'edit'])->name('produkEdit');
Route::put('/produk/update/{id}', [NewProdukController::class, 'update'])->name('produkUpdate');

Route::get('/kategori/delete/{id}', [NewKategoriController::class, 'destroy'])->name('kategoriDelete');
Route::get('/kategori/create', [NewKategoriController::class, 'create'])->name('kategoriCreate');
Route::post('/kategori/store', [NewKategoriController::class, 'store'])->name('kategoriStore');
Route::put('/kategori/update/{id}', [NewKategoriController::class, 'update'])->name('kategoriUpdate');

Route::prefix('/user')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [CustomerController::class, 'login'])->name('user.login');
        Route::get('/register', [CustomerController::class, 'register'])->name('user.register');
        Route::post('/login', [CustomerController::class, 'loginPost'])->name('user.login');
        Route::post('/register', [CustomerController::class, 'registerPost'])->name('user.register');
    });

    Route::middleware('auth')->group(function () {
        Route::post('/logout', [CustomerController::class, 'logout'])->name('user.logout');
        Route::get('/profile', [CustomerController::class, 'show'])->name('user.profile');
        Route::get('/admin', [CustomerController::class, 'index'])->name('user.admin');
    });
});

// Route::prefix('/produk')->middleware('auth')->group(function () {
//     Route::get('/create', [ProdukController::class, 'create'])->name('produk.create');
//     Route::post('/create', [ProdukController::class, 'store'])->name('produk.create');

//     Route::get('/edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
//     Route::put('/edit/{id}', [ProdukController::class, 'update'])->name('produk.update');

//     Route::delete('/delete/{id}', [ProdukController::class, 'destroy'])->name('produk.delete');
// });

// Route::prefix('/kategori')->middleware('auth')->group(function () {
//     Route::get('/create', [KategoriController::class, 'create'])->name('kategori.create');
//     Route::post('/store', [KategoriController::class, 'store'])->name('kategori.store');

//     Route::get('/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
//     Route::put('/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');

//     Route::delete('/delete/{id}', [KategoriController::class, 'destroy'])->name('kategori.delete');
// });

// Route::prefix('/cart')->group(function () {
//     Route::post('/add', [CartController::class, 'add'])->name('cart.add');
//     Route::post('/update', [CartController::class, 'update'])->name('cart.update');
//     Route::get('/clear', [CartController::class, 'clear'])->name('cart.clear');
//     Route::get('/detail', [CartController::class, 'index'])->name('cart.detail');
//     Route::post('/detail', [CartController::class, 'detail'])->name('cart.detail');
//     Route::post('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
// });
