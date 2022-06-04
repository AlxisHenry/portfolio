<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Routing\Controller;

class AboutController extends Controller
{

    public function __construct()
    {

    }

    public function About(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('templates.about', ['title' => 'About me - Henry Alexis', 'navbar' => 'about', 'og_description' => 'Portfolio Henry Alexis - About me']);
    }

}
