<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ProductStatusController;
use App\Http\Controllers\SalesStatusController;
use App\Http\Controllers\MaterialController;
use App\Models\Sale;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Recursos
Route::resources([
    'categories' => CategoryController::class,
    'products' => ProductController::class,
    'user' => UserController::class,
    // 'index_sales' => SalesStatusController::class,
    'sales' => SaleController::class,
    'product-statuses' => ProductStatusController::class,
    'sales-statuses' => SalesStatusController::class,
    'materials' => MaterialController::class,
]);
Route::get('/sale/{sale}/PDF', [UserController::class, 'printPDF'])->name('sale.PDF');
Route::get('sale/index_sales', [SaleController::class, 'index_sales'])->name('sales.index_sales');


// Auth::routes();
// Route::resource('categories', CategoryController::class);

// Auth::routes();
// Route::resource('products', ProductController::class);

// Auth::routes();
// Route::resource('user', UserController::class);

// Auth::routes();
// Route::resource('sales', SaleController::class);


// Auth::routes();
// Route::resource('product-statuses', ProductStatusController::class);

// Auth::routes();
// Route::resource('sales-statuses', SalesStatusController::class);

// Auth::routes();
// Route::resource('materials', MaterialController::class);
