<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Routing\Controller;

class AboutController extends Controller
{

    public function __construct()
    {

    }

    public function GetAllSkills(): array|bool {

        $AllSkills['tech'] = [
            'bash', 'apache', 'nginx', 'docker', 'vagrant', 'git', 'phpstorm', 'vscode', 'python'
        ];
        $AllSkills['front'] = [
            'javascript', 'vuejs', 'react', 'typescript', 'jquery', 'scss'
        ];
        $AllSkills['back'] = [
            'php', 'nodejs', 'laravel'
        ];

        return $AllSkills;


    }

    public function About(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('templates.about', [
            'title' => 'About me - HENRY ALEXIS',
            'navbar' => 'about',
            'og_description' => 'Portfolio - HENRY ALEXIS - About me',
            'skills' => $this->GetAllSkills(),
            'animateTiming' => 1800,
            'resetTiming' => 1800
        ]);
    }

}
