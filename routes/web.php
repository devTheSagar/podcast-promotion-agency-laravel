<?php

use App\Http\Controllers\backend\AboutUsController;
use App\Http\Controllers\backend\auth\LoginController as AdminLoginController;
use App\Http\Controllers\backend\ContactInfoController;
use App\Http\Controllers\backend\MessageController as BackendMessageController;
use App\Http\Controllers\backend\OrderController as BackendOrderController;
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
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\MessageController;
use App\Http\Controllers\frontend\OrderController;
use App\Http\Controllers\frontend\PlanController as FrontendPlanController;
use App\Http\Controllers\frontend\ServiceController as FrontendServiceController;
use App\Http\Controllers\frontend\TestimonialController as FrontendTestimonialController;
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
Route::get('/', [HomeController::class, 'index'])->name('user.dashboard');
Route::post('logout', [UserLoginController::class, 'logout'])->name('logout.user');

Route::get('sign-up', [RegisterController::class, 'index'])->name('signup.user');
Route::post('sign-up', [RegisterController::class, 'register'])->name('register.user');

// user services
Route::get('services/{id}', [FrontendServiceController::class, 'index'])->name('user.service-details');

// user plans
Route::get('plans/{id}', [FrontendPlanController::class, 'index'])->name('user.plan-details');

// user message
Route::get('contact', [MessageController::class, 'index'])->name('user.message');
Route::post('contact', [MessageController::class, 'message'])->name('user.send-message');

// user checkout
Route::get('checkout/{id}', [CheckoutController::class, 'index'])->middleware('auth')->name('user.checkout');

Route::post('checkout', [OrderController::class, 'store'])->middleware('auth')->name('user.order');


// user account
Route::get('user-account', [UserAccountController::class, 'index'])->middleware('auth')->name('user.account');


// track order
Route::get('track-order', [TrackOrderController::class, 'index'])->middleware('auth')->name('user.track-order');
Route::get('order-details/{id}', [TrackOrderController::class, 'orderDetails'])->middleware('auth')->name('user.order-details');


// user testimonials
Route::get('testimonials', [FrontendTestimonialController::class, 'index'])->name('user.testimonials');






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
    Route::get('view-service/{id}', [ServiceController::class, 'view'])->name('admin.view-service');

    // admin plans
    Route::get('plans', [PlanController::class, 'index'])->name('admin.all-plans');
    Route::get('add-plans', [PlanController::class, 'create'])->name('admin.add-plan');
    Route::post('add-plans', [PlanController::class, 'store'])->name('admin.store-plan');
    Route::get('edit-plan/{id}', [PlanController::class, 'edit'])->name('admin.edit-plan');
    Route::post('update-plan/{id}', [PlanController::class, 'update'])->name('admin.update-plan');
    Route::delete('delete-plan/{id}', [PlanController::class, 'destroy'])->name('admin.delete-plan');
    // get plans by service
    Route::get('/get-plans-by-service/{service_id}', [PlanController::class, 'getPlansByService']);
    Route::get('view-plan/{id}', [PlanController::class, 'view'])->name('admin.view-plan');

    // admin plan ratings
    Route::get('ratings', [RatingController::class, 'index'])->name('admin.all-ratings');
    Route::get('add-ratings', [RatingController::class, 'create'])->name('admin.add-rating');
    Route::post('add-ratings', [RatingController::class, 'store'])->name('admin.store-rating');
    Route::get('edit-rating/{id}', [RatingController::class, 'edit'])->name('admin.edit-rating');
    Route::post('update-rating/{id}', [RatingController::class, 'update'])->name('admin.update-rating');
    Route::delete('delete-rating/{id}', [RatingController::class, 'destroy'])->name('admin.delete-rating');
    Route::get('view-rating/{id}', [RatingController::class, 'view'])->name('admin.view-rating');

    // admin contact info
    Route::get('contact-info', [ContactInfoController::class, 'index'])->name('admin.all-contact-infoes');
    Route::get('add-contact-info', [ContactInfoController::class, 'create'])->name('admin.add-contact-info');
    Route::post('add-contact-info', [ContactInfoController::class, 'store'])->name('admin.store-contact-info');
    Route::get('edit-contact-info/{id}', [ContactInfoController::class, 'edit'])->name('admin.edit-contact-info');
    Route::post('update-contact-info/{id}', [ContactInfoController::class, 'update'])->name('admin.update-contact-info');
    Route::delete('delete-contact-info/{id}', [ContactInfoController::class, 'destroy'])->name('admin.delete-contact-info');
    Route::get('view-contact-info/{id}', [ContactInfoController::class, 'view'])->name('admin.view-contact-info');

    // admin social links
    Route::get('social-links', [SocialLinkController::class, 'index'])->name('admin.all-social-links');
    Route::get('add-social-links', [SocialLinkController::class, 'create'])->name('admin.add-social-link');
    Route::post('add-social-links', [SocialLinkController::class, 'store'])->name('admin.store-social-link');
    Route::get('edit-social-link/{id}', [SocialLinkController::class, 'edit'])->name('admin.edit-social-link');
    Route::post('update-social-link/{id}', [SocialLinkController::class, 'update'])->name('admin.update-social-link');
    Route::delete('delete-social-link/{id}', [SocialLinkController::class, 'destroy'])->name('admin.delete-social-link');
    Route::get('view-social-link/{id}', [SocialLinkController::class, 'view'])->name('admin.view-social-link');

    // admin privacy policy
    Route::get('privacy-policy', [PrivacyPolicyController::class, 'index'])->name('admin.privacy-policies');
    Route::get('add-privacy-policy', [PrivacyPolicyController::class, 'create'])->name('admin.add-privacy-policy');
    Route::post('add-privacy-policy', [PrivacyPolicyController::class, 'store'])->name('admin.store-privacy-policy');
    Route::get('edit-privacy-policy/{id}', [PrivacyPolicyController::class, 'edit'])->name('admin.edit-privacy-policy');
    Route::post('update-privacy-policy/{id}', [PrivacyPolicyController::class, 'update'])->name('admin.update-privacy-policy');
    Route::delete('delete-privacy-policy/{id}', [PrivacyPolicyController::class, 'destroy'])->name('admin.delete-privacy-policy');
    Route::get('view-privacy-policy/{id}', [PrivacyPolicyController::class, 'view'])->name('admin.view-privacy-policy');

    // admin about us
    Route::get('about-us', [AboutUsController::class, 'index'])->name('admin.about-us');
    Route::get('add-about-us', [AboutUsController::class, 'create'])->name('admin.add-about-us');
    Route::post('add-about-us', [AboutUsController::class, 'store'])->name('admin.store-about-us');
    Route::get('edit-about-us/{id}', [AboutUsController::class, 'edit'])->name('admin.edit-about-us');
    Route::post('update-about-us/{id}', [AboutUsController::class, 'update'])->name('admin.update-about-us');
    Route::delete('delete-about-us/{id}', [AboutUsController::class, 'destroy'])->name('admin.delete-about-us');
    Route::get('view-about-us/{id}', [AboutUsController::class, 'view'])->name('admin.view-about-us');

    // admin testimonial
    Route::get('testimonial', [TestimonialController::class, 'index'])->name('admin.testimonials');
    Route::get('add-testimonial', [TestimonialController::class, 'create'])->name('admin.add-testimonials');
    Route::post('add-testimonial', [TestimonialController::class, 'store'])->name('admin.store-testimonial');
    Route::get('edit-testimonial/{id}', [TestimonialController::class, 'edit'])->name('admin.edit-testimonial');
    Route::post('update-testimonial/{id}', [TestimonialController::class, 'update'])->name('admin.update-testimonial');
    Route::delete('delete-testimonial/{id}', [TestimonialController::class, 'destroy'])->name('admin.delete-testimonial');
    Route::get('view-testimonial/{id}', [TestimonialController::class, 'view'])->name('admin.view-testimonial');

    // admin team
    Route::get('team', [TeamController::class, 'index'])->name('admin.team');
    Route::get('add-team', [TeamController::class, 'create'])->name('admin.add-team');
    Route::post('add-team', [TeamController::class, 'store'])->name('admin.store-team');
    Route::get('edit-team/{id}', [TeamController::class, 'edit'])->name('admin.edit-team');
    Route::post('update-team/{id}', [TeamController::class, 'update'])->name('admin.update-team');
    Route::delete('delete-team/{id}', [TeamController::class, 'destroy'])->name('admin.delete-team');
    Route::get('view-team/{id}', [TeamController::class, 'view'])->name('admin.view-team');

    // admin messages
    Route::get('messages', [BackendMessageController::class, 'showMessages'])->name('admin.show-messages');
    Route::get('view-messages/{id}', [BackendMessageController::class, 'viewMessage'])->name('admin.view-message');

    // admin orders
    Route::get('orders', [BackendOrderController::class, 'index'])->name('admin.orders');
    Route::get('view-order/{id}', [BackendOrderController::class, 'viewOrder'])->name('admin.view-order');
    Route::post('update-order-status/{id}', [BackendOrderController::class, 'updateStatus'])->name('admin.update-order-status');

});