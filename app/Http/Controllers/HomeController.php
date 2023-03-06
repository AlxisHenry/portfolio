<?php

namespace App\Http\Controllers;

use App\Helpers\Language;
use App\Models\News;
use App\Models\Projects;
use Illuminate\Routing\Controller;
use App\Helpers\Rand;
use App\Helpers\Translate;
use App\Models\Resource;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index', [
            'title' => 'Portfolio - HENRY ALEXIS',
            'navbar' => 'home',
            'languages' => Language::links(),
            'og_description' => 'Portfolio - HENRY ALEXIS - Homepage',
            'news' => News::spoilers(),
            'resources' => Resource::spoilers(),
            'projects' => Projects::spoilers(),
            'g' => Translate::google(),
            'secret' => Rand::int(1, 10)
        ]);
    }
}
