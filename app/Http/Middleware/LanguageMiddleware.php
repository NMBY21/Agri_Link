<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class LanguageMiddleware
{
    public function handle($request, Closure $next)
    {
        if ($request->session()->has('applocale')) {
            App::setLocale($request->session()->get('applocale'));
        } else {
            // Default language
            App::setLocale('en');
        }

        return $next($request);
    }
}
