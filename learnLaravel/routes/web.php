<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
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
//laravel 8 (new)
Route::get('/products', [ProductsController::Class, 'index']);

// Pattern is interger
Route::get('/products/{id}', 
    [ProductsController::class, 'show'])->where('id', '[0-9]+');

// products = all products
// /products/productsName
// /products/productId

// Pattern is istring
Route::get('/products/{name}/{id}', 
    [ProductsController::class, 'show'])->where([
        'name' => '[a-z]+',
        'id' => '[0-9]+'
    ]);

