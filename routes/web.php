<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('dashboard');
Route::get('/contact-us', [PublicController::class, 'contact_us'])->name('contact_us');
