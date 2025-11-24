<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('dashboard');
Route::get('/contact-us', [PublicController::class, 'contact_us'])->name('contact_us');

Route::post('/contact-us', [PublicController::class, 'email'])->name('email');

Route::get('/product', [ProductController::class, 'index'])->name('products');
Route::view('/product/create', 'product.product-create')->name('product.form');
