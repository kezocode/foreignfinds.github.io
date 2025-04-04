<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */

    public function setLanguage($locale)
{
    // Store the selected locale in the session
    Session::put('locale', $locale);

    // Set the application's locale
    App::setLocale($locale);

    return redirect()->back();
}

}
