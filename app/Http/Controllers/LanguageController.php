<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;

class LanguageController extends Controller
{
    public function switch($lang)
    {
        if (!array_key_exists($lang, Config::get('languages'))) {
            return back();
        }

        $currentLang = \App::getLocale();
        $previousLink = Str::replace(request()->getSchemeAndHttpHost(), '', url()->previous());
        if (Str::contains($previousLink, $currentLang)) {
            return redirect(Str::replaceFirst($currentLang, $lang, $previousLink));
        }

        return redirect('/' . $lang . $previousLink);
    }
}
