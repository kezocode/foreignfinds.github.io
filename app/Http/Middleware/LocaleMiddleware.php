<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class LocaleMiddleware
{
public function handle(Request $request, Closure $next): Response
    {
        // Set locale based on session if available, default to 'en'
        if ($request->session()->has('locale')) {
            $locale = $request->session()->get('locale', 'en');
        } else {
            $locale = 'en';  // Default locale if none is set
        }

        // Set the application locale
        App::setLocale($locale);

        return $next($request);
    }
}
