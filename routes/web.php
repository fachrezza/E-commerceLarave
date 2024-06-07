<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', [ProductController::class, 'shop'])->name('shop');


