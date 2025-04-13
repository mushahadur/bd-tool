<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\User\BkashController;


Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/register-page', [HomeController::class, 'register'])->name('home');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/recharge', [DashboardController::class, 'recharge'])->name('recharge');

    //_Route For Profile
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');

    //_Route For BKach 
    Route::get('/bkash-info', [BkashController::class, 'index'])->name('bkash.info');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
