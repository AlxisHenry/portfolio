<?php

namespace App\Http\Controllers;

use App\Helpers\Rand;
use App\Helpers\Skills;
use Illuminate\Routing\Controller;

class AboutController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.about', [
            'title' => 'About me - HENRY ALEXIS',
            'navbar' => 'about',
            'og_description' => 'Portfolio - HENRY ALEXIS - About me',
            'skills' => Skills::all(),
            'animateTiming' => 1800,
            'resetTiming' => 1800,
            'random_number' => Rand::int(1, 10),
        ]);
    }
}
