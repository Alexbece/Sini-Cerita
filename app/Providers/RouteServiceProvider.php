<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthenticateUserOrDokter;

class RouteServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Daftarkan middleware custom
        Route::aliasMiddleware('auth.userOrDokter', AuthenticateUserOrDokter::class);

       
    }
}
