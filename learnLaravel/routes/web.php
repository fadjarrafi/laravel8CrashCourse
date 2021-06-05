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
// Route::get('/products/about', [ProductsController::class, 'about']);

// // Laravel 8 (also new)
// Route::get('/products', 'App\Http\Controllers\ProductsController@index');

