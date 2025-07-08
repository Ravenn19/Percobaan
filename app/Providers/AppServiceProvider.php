<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;



class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Global header untuk mencegah cache
        \Illuminate\Support\Facades\Response::macro('nocache', function ($response) {
            return $response->header('Cache-Control','no-cache, no-store, must-revalidate')
                            ->header('Pragma','no-cache')
                            ->header('Expires','0');
        });
    }

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
    // public function boot(): void
    // {
    //     //
    // }
}
