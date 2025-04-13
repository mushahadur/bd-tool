<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\User\BkashController;
use App\Http\Controllers\User\LocationServiceController;


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
    Route::get('/nagad-info', [BkashController::class, 'nagadInfo'])->name('nagad.info');

    Route::get('/bkash-statment', [BkashController::class, 'bkashStatment'])->name('bkash.statment');
    Route::get('/nagad-statment', [BkashController::class, 'nagadStatment'])->name('nagad.statment');

    //_Route For Location Service 
    Route::get('/number-to-location-history', [LocationServiceController::class, 'numberToLocationHistory'])->name('number.to.location.history');
    Route::get('/number-to-location', [LocationServiceController::class, 'numberToLocation'])->name('number.to.location');
    Route::get('/fg-to-location', [LocationServiceController::class, 'fbToLocation'])->name('fb.to.location');
    Route::get('/fg-id-recover', [LocationServiceController::class, 'fbIdRecover'])->name('fb.id.recover');
    Route::get('/imei-to-location', [LocationServiceController::class, 'imeiToLocation'])->name('imei.to.location');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
