<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLanguage
{
    public function handle(Request $request, Closure $next)
    {
        $lang = $request->segment(1);

        if (in_array($lang, ['en', 'hu', 'de'])) {
            app()->setLocale($lang);
        } else {
            app()->setLocale(config('app.fallback_locale', 'hu'));
        }

        return $next($request);
    }
}