<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class LocaleMiddleware
{
    public function handle($request, Closure $next)
    {
        if (session()->has('applocale')) {
            App::setLocale(session('applocale'));
        }

        return $next($request);
    }
}
