<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminProdukController;

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

Route::prefix('/')->group(function () {
    Route::prefix('/')->name('dashboard.')->group(function () {
        Route::get('/', [AdminDashboardController::class, 'index'])->name('index');
    });

    Route::prefix('/dataproduk')->name('dataproduk.')->group(function () {
        Route::get('/', [AdminProdukController::class, 'index'])->name('index');
        Route::get('/create', [AdminProdukController::class, 'create'])->name('create');
        Route::post('/store', [AdminProdukController::class, 'store'])->name('store');
        Route::get('/show/{id}', [AdminProdukController::class, 'show'])->name('show');
        Route::get('/detail/{id}', [AdminProdukController::class, 'detail'])->name('detail');
        Route::post('/update/{id}', [AdminProdukController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [AdminProdukController::class, 'delete'])->name('delete');
    });
    
});