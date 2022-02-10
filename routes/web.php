<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QrController;
use App\Http\Controllers\ViewController;
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

Route::middleware(['guest.google'])->group(function () {
    Route::get('/login', [ViewController::class, 'viewLoginAndRegister'])->name('login');
    Route::get('/auth/google', [AuthController::class, 'googleredirect'])->name('login.google');
    Route::get('/auth/google/callback', [AuthController::class, 'datagoogle']);
});
Route::middleware(['google'])->group(function () {
    Route::get('/', [ViewController::class, 'viewHome']);
    Route::post('/', [ItemController::class, 'itemValidate']);
    Route::get('/profile', [ViewController::class, 'viewProfile']);
    Route::post('/profile', [ProfileController::class, 'updateProfile']);
    Route::get('/pembayaran', [QrController::class, 'qrView']);
    Route::post('/', [QrController::class, 'qr']);
    Route::get('/download', [QrController::class, 'download']);
    Route::get('/history', [ViewController::class, 'viewHistory']);
    Route::get('/logout', [AuthController::class, 'logout']);
});
