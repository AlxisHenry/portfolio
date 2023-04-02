<?php

namespace App\Http\Controllers;

use App\Helpers\Rand;
use App\Helpers\Skills;
use App\Models\Experience;
use App\Models\Hobby;
use Illuminate\Routing\Controller;

class AboutController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $skills = Skills::all();
        $experiences = Experience::orderBy('started_at', 'asc')->get();
        $hobbies = Hobby::orderBy('position', 'desc')->get();
        
        return view('pages.about', [
            'title' => 'About me - HENRY ALEXIS',
            'navbar' => 'about',
            'og_description' => 'Portfolio - HENRY ALEXIS - About me',
            'skills' => $skills,
            'experiences' => $experiences,
            'hobbies' => $hobbies,
            'chunks' => array_chunk($skills["tech"], 4),
            'animateTiming' => 1800,
            'resetTiming' => 1800,
            'secret' => Rand::int(1, 10),
        ]);
    }
}
