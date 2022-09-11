<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ProfitController;
use App\Http\Controllers\OrderController;



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
Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class,"index"])->name('products.all');
    Route::get('/new', [ProductController::class,"new"])->name('products.new');
    Route::post('/store', [ProductController::class,"store"])->name('products.store');
    Route::get('/{product_id}/edit', [ProductController::class,"edit"])->name('products.edit');
    Route::post('/{product_id}/update', [ProductController::class,"update"])->name('products.update');
    Route::get('/{product_id}/delete', [ProductController::class,"delete"])->name('products.delete');
    Route::get('/{product_id}/{status}/status', [ProductController::class,"status"])->name('products.status');

    Route::post('/{product_id}/image/uploads', [ProductController::class,"imageUpload"])->name('products.image.uploads');
    Route::post('/{product_id}/image/delete', [ProductController::class,"imageDelete"])->name('products.image.delete');
});

//customers
Route::prefix('Customers')->group(function () {
    Route::get('/', [CustomerController::class,"index"])->name('customers.all');
    Route::get('/new', [CustomerController::class,"new"])->name('customers.new');
    Route::post('/store', [CustomerController::class,"store"])->name('customers.store');
    Route::get('/{customer_id}/edit', [CustomerController::class,"edit"])->name('customers.edit');
    Route::post('/{customer_id}/update', [CustomerController::class,"update"])->name('customers.update');
    Route::get('/{customer_id}/delete', [CustomerController::class,"delete"])->name('customers.delete');
    Route::get('/{customer_id}/{status}/status', [CustomerController::class,"status"])->name('customers.status');
});

//orders
Route::prefix('orders')->group(function () {
    Route::get('/', [OrderController::class,"index"])->name('orders.all');
    Route::get('/new', [OrderController::class,"new"])->name('orders.new');
    Route::post('/store', [OrderController::class,"store"])->name('orders.store');
    Route::get('/{order_id}/edit', [OrderController::class,"edit"])->name('orders.edit');
    Route::post('/{order_id}/update', [OrderController::class,"update"])->name('orders.update');
    Route::get('/{order_id}/delete', [OrderController::class,"delete"])->name('orders.delete');
    Route::get('/{order_id}/{status}/status', [OrderController::class,"status"])->name('orders.status');
});

//requests
Route::prefix('requests')->group(function () {
    Route::get('/', [RequestController::class,"index"])->name('requests.all');
    Route::get('/new', [RequestController::class,"new"])->name('requests.new');
    Route::post('/store', [RequestController::class,"store"])->name('requests.store');
    Route::get('/{request_id}/edit', [RequestController::class,"edit"])->name('requests.edit');
    Route::post('/{request_id}/update', [RequestController::class,"update"])->name('requests.update');
    Route::get('/{request_id}/delete', [RequestController::class,"delete"])->name('requests.delete');
    Route::get('/{request_id}//status', [RequestController::class,"status"])->name('requests.status');
});

//profits
Route::prefix('profits')->group(function () {
    Route::get('/', [ProfitController::class,"index"])->name('profits.all');
    Route::get('/new', [ProfitController::class,"new"])->name('profits.new');
    Route::post('/store', [ProfitController::class,"store"])->name('profits.store');
    Route::get('/{profit_id}/edit', [ProfitController::class,"edit"])->name('profits.edit');
    Route::post('/{profit_id}/update', [ProfitController::class,"update"])->name('profits.update');
    Route::get('/{profit_id}/delete', [ProfitController::class,"delete"])->name('profits.delete');
    Route::get('/{profit_id}//status', [ProfitController::class,"status"])->name('profits.status');
});

//settings
Route::prefix('settings')->group(function () {
    Route::get('/', [SettingController::class,"index"])->name('settings.all');
    Route::get('/new', [SettingController::class,"new"])->name('settings.new');
    Route::post('/store', [SettingController::class,"store"])->name('settings.store');
    Route::get('/{setting_id}/edit', [SettingController::class,"edit"])->name('settings.edit');
    Route::post('/{setting_id}/update', [SettingController::class,"update"])->name('settings.update');
    Route::get('/{setting_id}/delete', [SettingController::class,"delete"])->name('settings.delete');
    Route::get('/{setting_id}//status', [SettingController::class,"status"])->name('settings.status');
});
