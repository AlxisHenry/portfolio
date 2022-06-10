<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProjectsController extends Controller
{

    public function __construct()
    {

    }

    public function Projects(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('templates.projects', ['title' => 'Projects - HENRY ALEXIS',
                                                'navbar' => 'projects',
                                                'og_description' => 'Portfolio HENRY ALEXIS - Projects']);
    }

    public function TargetProject(string $name): string
    {
        return $name;
    }

}
