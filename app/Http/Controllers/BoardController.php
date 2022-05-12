<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BoardController extends Controller
{
    //

    public function __construct()
    {

    }

    public function Board() {
        return view('layouts.board', ['title' => 'Board - Henry Alexis', 'navbar' => 'board', 'og_description' => 'Portfolio Henry Alexis - Board with my articles']);
    }

}
