<?php

namespace App\Http\Controllers;

use App\Helpers\Language;
use App\Models\Board;
use App\Models\News;
use App\Models\Projects;
use Illuminate\Routing\Controller;
use App\Helpers\Rand;
use App\Helpers\Translate;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index', [
            'title' => 'Portfolio - HENRY ALEXIS',
            'navbar' => 'home',
            'languages' => Language::links(),
            'og_description' => 'Portfolio - HENRY ALEXIS - Homepage',
            'spoiler_cards' => News::spoilers(),
            'boards' => Board::spoilers(),
            'Projects' => Projects::spoilers(),
            'Google' => Translate::google(),
            'random_number' => Rand::int(1, 10)
        ]);
    }
}
