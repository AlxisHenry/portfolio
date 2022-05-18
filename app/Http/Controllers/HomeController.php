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
            $LANGUAGES[] = "<a href='/home/language/$language_name'><img src='". url($item) ."' alt='$language_name' title='$language_name' class='language_icon'></a>";
        }

        return $LANGUAGES;

    }

    public function Home()
    {
        $Google = $this->GoogleTranslate();

        $spoiler_cards = DB::table('NEWS_ARTICLE')
            ->join('NEWS_DATE', 'NEWS_ARTICLE.identifier', '=', 'NEWS_DATE.identifier')
            ->join('NEWS_IMAGE', 'NEWS_ARTICLE.identifier', '=', 'NEWS_IMAGE.identifier')
            ->join('NEWS_THEME', 'NEWS_ARTICLE.identifier', '=', 'NEWS_THEME.identifier')
            ->where('NEWS_ARTICLE.identifier', '>', 160)
            ->where('NEWS_ARTICLE.identifier', '<', 167)
            ->get();

        return view('templates.homepage', ['title' => 'Home - Henry Alexis',
                                        'navbar' => 'home',
                                        'languages' => $this->Languages(),
                                        'og_description' => 'Portfolio Henry Alexis - Homepage',
                                        'spoiler_cards' => $spoiler_cards,
                                        'Google' => $Google]);
    }

    public function WikiLang(string $LANGUAGE)
    {

        $LANGUAGE_TO_SCRAP = '';

        return view('templates.language', ['title' => 'Language - Henry Alexis', 'LANGUAGE' => $LANGUAGE]);
    }
}
