<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {

    }

    public function Home() {
        return view('homepage', ['title' => 'Home - Henry Alexis', 'navbar' => 'home', 'og_description' => 'Portfolio Henry Alexis - Homepage']);
    }

}
