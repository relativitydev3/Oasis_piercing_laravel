<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SaleController;
Route::get('/', function () {
    return view('welcome');
}); 


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Auth::routes();
Route::resource('categories', CategoryController::class);

Auth::routes();
Route::resource('products', ProductController::class);

Auth::routes();
Route::resource('user', UserController::class);

Auth::routes();
Route::resource('sales', SaleController::class);