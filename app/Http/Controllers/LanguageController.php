<?php

namespace App\Http\Controllers;

use App\Helpers\Language;
use App\Helpers\Wikipedia;

class LanguageController extends Controller
{
    public function index()
    {
        return view('templates.language', [
            'title' => 'Languages - HENRY ALEXIS',
            'navbar' => 'null',
            'show_all_languages' => true,
            'languages' => Language::all(),
            'generate' => Language::random()
        ]);
    }

    public function show(string $language)
    {
        $lg = Language::match($language);
        if($lg) {
            return view('templates.language', [
                'title' => ucfirst($language) . ' - HENRY ALEXIS',
                'navbar' => 'null',
                'url' => 'https://en.wikipedia.org/wiki/' . $lg,
                'lang' => Wikipedia::query($lg),
                'generate' => Language::random()
            ]);
        }
        return abort(404);
    }

}
