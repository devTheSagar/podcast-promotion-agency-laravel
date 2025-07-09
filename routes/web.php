<?php

use App\Http\Controllers\backend\AboutUsController;
use App\Http\Controllers\backend\auth\LoginController as AdminLoginController;
use App\Http\Controllers\backend\ContactInfoController;
use App\Http\Controllers\backend\PlanController;
use App\Http\Controllers\backend\PrivacyPolicyController;
use App\Http\Controllers\backend\RatingController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\SocialLinkController;
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


    // admin services 
    Route::get('services', [ServiceController::class, 'index'])->name('admin.all-services');
    Route::get('add-services', [ServiceController::class, 'create'])->name('admin.add-service');

    // admin plans
    Route::get('plans', [PlanController::class, 'index'])->name('admin.all-plans');
    Route::get('add-plans', [PlanController::class, 'create'])->name('admin.add-plan');

    // admin plan ratings
    Route::get('ratings', [RatingController::class, 'index'])->name('admin.all-ratings');
    Route::get('add-ratings', [RatingController::class, 'create'])->name('admin.add-rating');

    // admin contact info
    Route::get('contact-info', [ContactInfoController::class, 'index'])->name('admin.all-contact-infoes');
    Route::get('add-contact-info', [ContactInfoController::class, 'create'])->name('admin.add-contact-info');

    // admin social links
    Route::get('social-links', [SocialLinkController::class, 'index'])->name('admin.all-social-links');
    Route::get('add-social-links', [SocialLinkController::class, 'create'])->name('admin.add-social-link');

    // admin privacy policy
    Route::get('privacy-policy', [PrivacyPolicyController::class, 'index'])->name('admin.privacy-policies');
    Route::get('add-privacy-policy', [PrivacyPolicyController::class, 'create'])->name('admin.add-privacy-policy');

    // admin about us
    Route::get('about-us', [AboutUsController::class, 'index'])->name('admin.about-us');
    Route::get('add-about-us', [AboutUsController::class, 'create'])->name('admin.add-about-us');
});