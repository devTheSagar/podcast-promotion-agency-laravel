<?php

use App\Http\Controllers\backend\auth\LoginController as AdminLoginController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\frontend\auth\LoginController as UserLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// User Routes
Route::get('login', [UserLoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [UserLoginController::class, 'login']);
Route::get('/user/dashboard', function () {
    return view('frontend.home');
})->middleware('auth')->name('user.dashboard');
Route::post('logout', [UserLoginController::class, 'logout'])->name('logout.user');


// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AdminLoginController::class, 'login']);
    Route::get('/dashboard', function () {
        return view('backend.home');
    })->middleware('auth:admin')->name('admin.dashboard');
    Route::post('logout', [AdminLoginController::class, 'logout'])->name('logout.admin');



    Route::get('services', [ServiceController::class, 'index'])->name('admin.all-services');
    Route::get('add-services', [ServiceController::class, 'create'])->name('admin.add-service');
});