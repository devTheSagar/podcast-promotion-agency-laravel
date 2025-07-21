<?php

namespace App\Providers;

use App\Models\Service;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // load all services in header blade because all services should be shown in header 
        View::composer('frontend.common.header', function ($view) {
            $services = Service::all();
            $view->with('services', $services);
        });
    }
}
