<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Middleware\TrustProxies as MiddlewareTrustProxies;



class TrustProxies extends MiddlewareTrustProxies
{
    protected $proxies = '*';
}
