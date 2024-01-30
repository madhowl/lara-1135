<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
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
        //Paginator::useBootstrap();
        Paginator::defaultView('frontend.partials.pagination-b5');
        //Paginator::defaultView('frontend.partials.pagination-simple-b5');
        //Paginator::useBootstrapFive();
    }
}
