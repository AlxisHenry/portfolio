<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stichoza\GoogleTranslate\GoogleTranslate;

class AboutController extends Controller
{

    public function __construct()
    {

    }

    public function About()
    {
        return view('about', ['title' => 'About me - Henry Alexis', 'navbar' => 'about', 'og_description' => 'Portfolio Henry Alexis - About me']);
    }

}
