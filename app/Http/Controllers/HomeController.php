<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Contact;
use App\Models\News;
use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Routing\Controller;
use App\Random\Random;
use App\Mail\ContactMailable;

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
        $random_number = new Random();

        return view('templates.homepage', ['title' => 'Portfolio - HENRY ALEXIS',
                                        'navbar' => 'home',
                                        'languages' => $this->Languages(),
                                        'og_description' => 'Portfolio - HENRY ALEXIS - Homepage',
                                        'spoiler_cards' => $spoiler_cards,
                                        'Boards' =>$board_cards,
                                        'Projects' => $projects_cards,
                                        'Google' => $Google,
                                        'random_number' => $random_number->GetRandomNumber()
        ]);
    }

    public function Contact(Request $request) {

        if ($request->isMethod('get')) {
            return redirect()->back();
        }

         // todo => Envoyer le mail lors de la validation du formulaire

        $random_number = $request->input('random_number');

        $validate = Validator::make($request->all(), [
            'name' => 'required|between:2,60|alpha',
            'email' => 'required|email',
            'object' => 'required|max:255',
            'content' => 'required|max:800',
            'verification' => 'required|between:'.$random_number.','.$random_number.'|int'
        ]);

        $elements = $request->all();

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput()->with('scroll', true)->with(compact('elements'));
        }

        $owner_email = "alexis.henry150357@gmail.com";

        Contact::create($request->all());
        Mail::to($owner_email)->queue(new ContactMailable($request->all()));

        return redirect()->back()->with('success', true)->with('scroll', true);

    }

}
