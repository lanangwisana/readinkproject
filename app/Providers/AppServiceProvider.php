<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Exception;

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
    // public function boot(): void
    // {
    //     try {
    //         DB::connection()->getPDO();
    //         dump('Database is connected. Database neme is: ' . DB::connection()->getDatabaseName());
    //     } catch (Exception $e) {
    //         dump('database connection failed');
    //     }
    // }
}
