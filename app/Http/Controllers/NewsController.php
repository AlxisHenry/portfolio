<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
    {

    }

    public function News() {
        return view('@news@', ['title' => 'News - Henry Alexis', 'navbar' => 'news', 'og_description' => 'Portfolio Henry Alexis - News Articles France Inter / CNIL']);
    }
}
