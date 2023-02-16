<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BoardController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.board', [
            'title' => 'Resources - HENRY ALEXIS',
            'navbar' => 'resources',
            'og_description' => 'Portfolio - HENRY ALEXIS - Resources',
            'boards' => Board::orderBy("published_at", "DESC")->get()
        ]);
    }
}
