<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stichoza\GoogleTranslate\GoogleTranslate;

class HomeController extends Controller
{

    public function __construct()
    {

    }

    public function GoogleTranslate(): GoogleTranslate
    {
        $Google = new GoogleTranslate();
        $Google->setSource('fr');
        $Google->setTarget('en');
        return $Google;
    }

    public function Home() {
        $Google = $this->GoogleTranslate();

        $spoiler_cards = DB::table('Articles')
            ->join('Dates', 'Articles.identifier', '=', 'Dates.identifier')
            ->join('Images', 'Articles.identifier', '=', 'Images.identifier')
            ->join('Themes', 'Articles.identifier', '=', 'Themes.identifier')
            ->where('Articles.identifier', '>', 160)
            ->where('Articles.identifier', '<', 163)
            ->get();

        return view('homepage', ['title' => 'Home - Henry Alexis',
                                      'navbar' => 'home',
                                      'og_description' => 'Portfolio Henry Alexis - Homepage',
                                      'spoiler_cards' => $spoiler_cards,
                                      'Google' => $Google]);
    }

}
