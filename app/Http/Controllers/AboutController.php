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

    public function About()
    {
        return view('layouts.about', ['title' => 'About me - Henry Alexis', 'navbar' => 'about', 'og_description' => 'Portfolio Henry Alexis - About me']);
    }

}
