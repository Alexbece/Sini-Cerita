<?php

return [
    App\Providers\AppServiceProvider::class,
    App\Providers\RouteServiceProvider::class, // ✅ Tambahkan ini!
    Laravel\Socialite\SocialiteServiceProvider::class,
];
