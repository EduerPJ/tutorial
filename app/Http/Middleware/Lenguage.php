<?php

namespace App\Http\Middleware;

use Closure;

// Importar
use Illuminate\Support\Facades\App;

class Lenguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $locale = substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);

        if ($locale != 'en' && $locale != 'es') {
            $locale = 'en';
        }

        App::setLocale($locale);

        return $next($request);
    }
}
