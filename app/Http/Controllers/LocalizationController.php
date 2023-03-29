<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function setLocale(string $locale)
	{
		if (in_array($locale, config('app.locales'))) {
			App::setLocale($locale);
			Session::put('locale', $locale);
		}
		return redirect()->back();
	}
}
