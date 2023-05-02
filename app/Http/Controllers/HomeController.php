<?php

namespace App\Http\Controllers;

use App\Helpers\Language;
use App\Models\News;
use Illuminate\Routing\Controller;
use App\Helpers\Rand;
use App\Helpers\Translate;
use App\Models\Project;
use App\Models\Resource;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index', [
            'title' => 'Portfolio',
            'navbar' => 'home',
            'languages' => Language::links(),
            'news' => News::spoilers(),
            'resources' => Resource::spoilers(),
            'projects' => Project::spoilers(),
            'g' => Translate::google(),
            'secret' => Rand::int(1, 10)
        ]);
    }
}
