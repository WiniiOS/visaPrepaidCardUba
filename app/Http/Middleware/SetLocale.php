<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    
    public function handle(Request $request, Closure $next)
    {

        $language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        if (in_array($language, ['en', 'fr'])) {
            app()->setLocale($language);
        }

        return $next($request);
    }
}
