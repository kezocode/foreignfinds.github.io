<?php

namespace App\Providers;

use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(UrlGenerator $url): void
{
    if (env('APP_ENV') == 'production') {
        $url->forceScheme('https');
    }

    if (Session::has('locale')) {
        App::setLocale(Session::get('locale'));
    }

    if (request()->has('lang')) {
        App::setLocale(request('lang'));
        session(['locale' => request('lang')]);
    } else {
        App::setLocale(session('locale', 'ja'));
    }
}
}
