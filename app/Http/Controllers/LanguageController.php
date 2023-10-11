<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request)
{
    $locale = $request->input('locale');

    if (!is_null($locale) && in_array($locale, ['en', 'ar', 'tr'])) {
        app()->setLocale($locale);
        session()->put('locale', $locale);
    }

    return back();
}

}
