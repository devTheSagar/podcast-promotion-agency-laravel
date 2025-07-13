<?php

use App\Http\Controllers\backend\AboutUsController;
use App\Http\Controllers\backend\auth\LoginController as AdminLoginController;
use App\Http\Controllers\backend\ContactInfoController;
use App\Http\Controllers\backend\PlanController;
use App\Http\Controllers\backend\PrivacyPolicyController;
use App\Http\Controllers\backend\RatingController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\SocialLinkController;
use App\Http\Controllers\backend\TeamController;
use App\Http\Controllers\backend\TestimonialController;
use App\Http\Controllers\frontend\auth\LoginController as UserLoginController;
use App\Http\Controllers\frontend\auth\RegisterController;
use App\Http\Controllers\frontend\CheckoutController;
use App\Http\Controllers\frontend\MessageController;
use App\Http\Controllers\frontend\PlanController as FrontendPlanController;
use App\Http\Controllers\frontend\ServiceController as FrontendServiceController;
use App\Http\Controllers\frontend\TrackOrderController;
use App\Http\Controllers\frontend\UserAccountController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// User Routes
Route::get('login', [UserLoginController::class, 'showLoginForm'])->name('login');
Route::get('sign-up', [RegisterController::class, 'index'])->name('signup.user');
Route::post('login', [UserLoginController::class, 'login']);
Route::get('/', function () {
    return view('frontend.home');
})->name('user.dashboard');
Route::post('logout', [UserLoginController::class, 'logout'])->name('logout.user');

// user services
Route::get('services', [FrontendServiceController::class, 'index'])->name('user.service-details');

// user plans
Route::get('plans', [FrontendPlanController::class, 'index'])->name('user.plan-details');

// user message
Route::get('contact', [MessageController::class, 'index'])->name('user.message');

// user checkout
Route::get('checkout', [CheckoutController::class, 'index'])->name('user.checkout');

// user account
Route::get('user-account', [UserAccountController::class, 'index'])->middleware('auth')->name('user.account');

// track order
Route::get('track-order', [TrackOrderController::class, 'index'])->middleware('auth')->name('user.track-order');







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
    Route::post('add-services', [ServiceController::class, 'store'])->name('admin.store-service');
    Route::get('edit-service/{id}', [ServiceController::class, 'edit'])->name('admin.edit-service');
    Route::post('update-service/{id}', [ServiceController::class, 'update'])->name('admin.update-service');
    Route::delete('delete-service/{id}', [ServiceController::class, 'destroy'])->name('admin.delete-service');

    // admin plans
    Route::get('plans', [PlanController::class, 'index'])->name('admin.all-plans');
    Route::get('add-plans', [PlanController::class, 'create'])->name('admin.add-plan');
    Route::post('add-plans', [PlanController::class, 'store'])->name('admin.store-plan');
    Route::get('edit-plan/{id}', [PlanController::class, 'edit'])->name('admin.edit-plan');
    Route::post('update-plan/{id}', [PlanController::class, 'update'])->name('admin.update-plan');
    Route::delete('delete-plan/{id}', [PlanController::class, 'destroy'])->name('admin.delete-plan');
    // get plans by service
    Route::get('/get-plans-by-service/{service_id}', [PlanController::class, 'getPlansByService']);

    // admin plan ratings
    Route::get('ratings', [RatingController::class, 'index'])->name('admin.all-ratings');
    Route::get('add-ratings', [RatingController::class, 'create'])->name('admin.add-rating');
    Route::post('add-ratings', [RatingController::class, 'store'])->name('admin.store-rating');
    Route::get('edit-rating/{id}', [RatingController::class, 'edit'])->name('admin.edit-rating');
    Route::post('update-rating/{id}', [RatingController::class, 'update'])->name('admin.update-rating');
    Route::delete('delete-rating/{id}', [RatingController::class, 'destroy'])->name('admin.delete-rating');

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

    // admin testimonial
    Route::get('testimonial', [TestimonialController::class, 'index'])->name('admin.testimonials');
    Route::get('add-testimonial', [TestimonialController::class, 'create'])->name('admin.add-testimonials');

    // admin team
    Route::get('team', [TeamController::class, 'index'])->name('admin.team');
    Route::get('add-team', [TeamController::class, 'create'])->name('admin.add-team');
    Route::post('add-team', [TeamController::class, 'store'])->name('admin.store-team');
    Route::get('edit-team/{id}', [TeamController::class, 'edit'])->name('admin.edit-team');
    Route::post('update-team/{id}', [TeamController::class, 'update'])->name('admin.update-team');
    Route::delete('delete-team/{id}', [TeamController::class, 'destroy'])->name('admin.delete-team');
    Route::get('view-team/{id}', [TeamController::class, 'view'])->name('admin.view-team');
});