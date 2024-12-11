<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SepatuController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HalamanController::class, 'home'])-> name('home');
Route::get('about', [HalamanController::class, 'about'])-> name('about');
Route::get('card', [HalamanController::class, 'card'])-> name('card');
Route::get('desk', [HalamanController::class, 'desk'])-> name('desk');
Route::get('contact', [HalamanController::class, 'contact'])-> name('contact');
Route::get('keranjang', [HalamanController::class, 'keranjang'])-> name('keranjang');

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/produk/tambah', [ProdukController::class, 'create'])->name('produk.create');
Route::get('/produk/card', [ProdukController::class, 'card'])->name('produk.card');
Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');

Route::get('/sepatu', [SepatuController::class, 'index'])->name('sepatu.index');
Route::get('/sepatu/tambah', [SepatuController::class, 'create'])->name('sepatu.create');
Route::post('/sepatu', [SepatuController::class, 'store'])->name('sepatu.store');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

Route::delete('/produks/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');



