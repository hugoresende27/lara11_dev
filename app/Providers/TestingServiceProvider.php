<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TestingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        dd('here I am');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
