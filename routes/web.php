<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;


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

Route::get('/', function () {
    return view('welcome');
});


//Admin
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'admin',
])->group(function () {
    //Display Products in dashboard
    Route::get('/dashboard', [AdminProductController::class, 'index'])->name('dashboard');


});


//Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::delete('/cart/remove/{cartItem}', [CartController::class, 'remove'])->name('cart.remove');
    Route::patch('/cart/update/{cartItem}', [CartController::class, 'update'])->name('cart.update');
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
    Route::post('/checkout/place', [CheckoutController::class, 'place'])->name('checkout.place');
    Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
});





//Get the categories and create a product
Route::get('/create', [CategoryController::class, 'create'])->name('create');
Route::post('/create', [AdminProductController::class, 'store'])->name('products.store');

//Display the Products
Route::get('/index', [ProductController::class, 'index'])->name('products.index');

//Display Product Details
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

//Edit Products and delete
Route::get('/edit/{id}', [AdminProductController::class, 'edit'])->name('products.edit');
Route::post('/edit/{id}', [AdminProductController::class, 'update'])->name('products.update');
Route::delete('/delete/{id}', [AdminProductController::class, 'destroy'])->name('products.destroy');

//Men's Product page
Route::get('/men',[ProductController::class,'showAllMen']);

//Women's Product page
Route::get('/women',[ProductController::class,'showAllWomen']);

