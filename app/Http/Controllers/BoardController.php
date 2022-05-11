<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoardController extends Controller
{
    //

    public function __construct()
    {

    }

    public function Board() {
        return view('board', ['title' => 'Board - Henry Alexis', 'navbar' => 'board', 'og_description' => 'Portfolio Henry Alexis - Board with my articles']);
    }

}
