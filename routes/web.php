<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'index'])->name('home');

Route::get('/products', [ProductsController::class, 'index'])->name('products');
Route::get('/products/{id}', [ProductsController::class, 'show'])->name('product');

Route::get('/cart', [CartController::class, 'cart'])->name('cart');