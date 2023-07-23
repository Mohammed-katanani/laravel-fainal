<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;

Route::get("/", [StaticController::class, 'index'])->name('home.index');
Route::get("/about", [StaticController::class, 'about'])->name('home.about');
Route::get("/contact", [StaticController::class, 'contact'])->name('home.contact');
Route::resource('products', ProductsController::class);
