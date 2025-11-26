<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('dashboard');
Route::get('/contact-us', [PublicController::class, 'contact_us'])->name('contact_us');

Route::post('/contact-us', [PublicController::class, 'email'])->name('email');

Route::get('/product', [ProductController::class, 'index'])->name('products');

Route::get('/product/create', [ProductController::class, 'create'])->name('product.form')->middleware('auth');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store')->middleware('auth');
Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.show')->middleware('auth');
Route::delete('/product/{product}', [ProductController::class, 'destroy'])->name('product.destroy')->middleware('auth');

Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit')->middleware('auth');
Route::put('/product/{product}', [ProductController::class, 'update'])->name('product.update')->middleware('auth');

Route::get('/user/profile',[PublicController::class, 'profile'])->name('profile')->middleware('auth');

