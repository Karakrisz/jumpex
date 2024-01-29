<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LanguageMiddleware
{
    public function handle(Request $request, Closure $next)
    {

        if ($request->has('lang')) {
            app()->setLocale($request->input('lang'));
        }

        return $next($request);
    }
}