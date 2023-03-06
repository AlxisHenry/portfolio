<?php

namespace App\Http\Controllers;

use App\Helpers\Language;
use App\Helpers\Wikipedia;

class LanguageController extends Controller
{
    public function index()
    {
        return view('pages.languages', [
            'title' => 'Languages - HENRY ALEXIS',
            'navbar' => 'null',
            'show' => true,
            'languages' => Language::all(),
            'random' => Language::random()
        ]);
    }

    public function show(string $language)
    {
        $lg = Language::match($language);
        if($lg) {
            return view('pages.languages', [
                'title' => ucfirst($language) . ' - HENRY ALEXIS',
                'navbar' => 'null',
                'url' => 'https://en.wikipedia.org/wiki/' . $lg,
                'language' => Wikipedia::query($lg),
                'random' => Language::random()
            ]);
        }
        return abort(404);
    }

}
