<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;

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

//Guest Home
Route::get('/', [PagesController::class, 'index'])->name('home');

//logout
Route::post('/logout', [LogoutController::class,'logout']);


//Logged in user routes
Auth::routes();
Route::get('/user/home', [HomeController::class, 'userHome'])->name('user.home')->middleware('auth');

//Logged in admin routes
Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

//shop routes
Route::get('/shop', [ProductController::class, 'index'])->name('products');
Route::get('/shop/{id}', [ProductController::class, 'show'])->name('product');


//Cart session routes
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::get('/remove-product/{id}', [CartController::class, 'removeProduct'])->name('remove.product');
Route::post('/update-quantity/{id}', [CartController::class, 'updateQuantity'])->name('update.quantity');