<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\News;
use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use MongoDB\Driver\Session;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

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
            $LANGUAGES[] = "<a href='/language/$language_name'><img src='". url($item) ."' alt='$language_name' title='$language_name' class='language_icon'></a>";
        }
        return $LANGUAGES;

    }

    public function Home()
    {

        $Google = $this->GoogleTranslate();
        $spoiler_cards = News::spoilers();
        $board_cards = Board::HomeBoard();
        $projects_cards = Projects::GetHomepageProjects();

        return view('templates.homepage', ['title' => 'Portfolio - HENRY ALEXIS',
                                        'navbar' => 'home',
                                        'languages' => $this->Languages(),
                                        'og_description' => 'Portfolio - HENRY ALEXIS - Homepage',
                                        'spoiler_cards' => $spoiler_cards,
                                        'Boards' =>$board_cards,
                                        'Projects' => $projects_cards,
                                        'Google' => $Google,
        ]);
    }

    public function Contact(Request $request) {

        if ($request->isMethod('get')) {
            return redirect()->back();
        }

         // todo => Envoyer le mail lors de la validation du formulaire

        return redirect()->back()->with('success', true);

    }

}
