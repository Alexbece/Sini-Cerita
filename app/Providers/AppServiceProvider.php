<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
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
        URL::forceScheme('https');
        // if (app()->environment('production')) {
        //     URL::forceScheme('https');
        // }
        DB::statement("SET time_zone = '+07:00'");

        date_default_timezone_set('Asia/Jakarta');
    }
}
