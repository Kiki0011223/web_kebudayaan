<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Pagination\Paginator;
=======
>>>>>>> 7275130ac15ab9e3fb2f6baab7f239faec0b709e
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
        //
<<<<<<< HEAD
        Paginator::useBootstrap();
=======
>>>>>>> 7275130ac15ab9e3fb2f6baab7f239faec0b709e
    }
}
