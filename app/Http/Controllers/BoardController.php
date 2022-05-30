<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BoardController extends Controller
{
    //

    public function __construct()
    {

    }

    public function AllBoards(): \Illuminate\Database\Eloquent\Collection
    {
        return $Board = Board::all();
    }

    public function Board(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('templates.board', ['title' => 'Board - Henry Alexis',
                    'navbar' => 'board',
                    'og_description' => 'Portfolio Henry Alexis - Board with my articles',
                    'Boards' => $this->AllBoards()]);
    }

}
