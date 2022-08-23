<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BannerController;

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

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

// Home
Route::get('/', [HomeController::class,"index"])->name('dashboard');

//categories
Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class,"index"])->name('categories.all');
    Route::get('/new', [CategoryController::class,"new"])->name('categories.new');
    Route::post('/store', [CategoryController::class,"store"])->name('categories.store');
    Route::get('/{category_id}/edit', [CategoryController::class,"edit"])->name('categories.edit');
    Route::post('/{category_id}/update', [CategoryController::class,"update"])->name('categories.update');
    Route::get('/{category_id}/delete', [CategoryController::class,"delete"])->name('categories.delete');
});

//products
Route::prefix('categories')->group(function () {
    Route::get('/', [ProductController::class,"index"])->name('products.all');
    Route::get('/new', [ProductController::class,"new"])->name('products.new');
    Route::post('/store', [ProductController::class,"store"])->name('products.store');
    Route::get('/{product_id}/edit', [ProductController::class,"edit"])->name('products.edit');
    Route::post('/{product_id}/update', [ProductController::class,"update"])->name('products.update');
    Route::get('/{product_id}/delete', [ProductController::class,"delete"])->name('products.delete');
});

//banner
Route::prefix('/banner',)->group(function () {
    Route::get('/', [BannerController::class, "index"])->name('banner.all');
    Route::post('/store', [BannerController::class, "store"])->name('banner.store');
    Route::get('/{banner_id}/delete', [BannerController::class, "delete"])->name('banner.delete');
    Route::get('/{banner_id}/status', [BannerController::class, "status"])->name('banner.status');

});
