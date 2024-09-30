<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function setLanguage($lang)
    {
        // Store the selected language in the session
        Session::put('locale', $lang);

        // Set the application locale
        App::setLocale($lang);

        return redirect()->back(); // Redirect back to the previous page
    }
}

