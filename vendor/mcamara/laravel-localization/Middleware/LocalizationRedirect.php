<?php

namespace Mcamara\LaravelLocalization\Middleware;

use Closure;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class LocalizationRedirect
{
    public function handle(Request $request, Closure $next)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        $locale = LaravelLocalization::getCurrentLocale();

        if (!array_key_exists($locale, $locales)) {
            return redirect(LaravelLocalization::getLocalizedURL());
        }

        return $next($request);
    }
}
