<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(ProductController::class)->group(function(){
    Route::get('products', 'index')->name('products.index');
    Route::get('products/{product:slug}', 'show')->name('products.show');
});
Route::controller(CategoryController::class)->group(function(){
    Route::get('categories', 'index')->name('categories.index');
    Route::get('categories/{category:slug}', 'show')->name('categories.show');
});
