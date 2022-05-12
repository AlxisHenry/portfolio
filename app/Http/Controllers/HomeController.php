<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Routing\Controller;

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

    public function Languages():array {

        $LANGUAGES_SVG = Storage::disk('public-content')->allFiles('assets/svg/languages');

        sort($LANGUAGES_SVG);
        $LANGUAGES = [];

        foreach ($LANGUAGES_SVG as $item) {
            $language_name = explode('.', $item)[1];
            $LANGUAGES[] = "<a href='/home/$language_name'><img src='". url($item) ."' alt='$language_name' title='$language_name' class='language_icon'></a>";

        }

        return $LANGUAGES;

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
                                      'languages' => $this->Languages(),
                                      'og_description' => 'Portfolio Henry Alexis - Homepage',
                                      'spoiler_cards' => $spoiler_cards,
                                      'Google' => $Google]);
    }

}
