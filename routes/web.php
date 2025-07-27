<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

/*|----------------------Authentication Logic ROutes----------------------------------------------------*/


// Routes only accessible to guests (not logged in)
Route::middleware('guest')->group(function () {
    Route::get('/', function () {
    return redirect()->route('login');
    });
    Route::get('login', [AuthController::class, 'loginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('logged');

    Route::get('register', [AuthController::class, 'registerForm'])->name('register');
    Route::post('register', [AuthController::class, 'register'])->name('store');
});

// Routes only accessible to authenticated users
Route::middleware('auth')->group(function () {
    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});




Route::resource('products', ProductController::class)->except('show');
Route::get('products/import/index', [MasterController::class, 'importProductIndex'])->name('importProductIndex');
Route::post('products/import', [MasterController::class, 'importProduct'])->name('importProduct');
Route::get('products/export', [MasterController::class, 'exportProduct'])->name('exportProduct');
