<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
    Route::get('/categories', [HomeController::class,"index"])->name('categories.all');
    Route::get('/categories/new', [HomeController::class,"new"])->name('categories.new');
    Route::post('/categories/store', [HomeController::class,"store"])->name('categories.store');
    Route::get('/categories/{category_id}/edit', [HomeController::class,"edit"])->name('categories.edit');
    Route::post('/categories/{category_id}/update', [HomeController::class,"update"])->name('categories.update');
    Route::get('/categories/{category_id}/delete', [HomeController::class,"delete"])->name('categories.delete');
});
