<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProjectsController extends Controller
{

    public function __construct()
    {

    }

    public function Projects(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {

        $Projects = Projects::all();

        return view('templates.projects', [
            'title' => 'Projects - HENRY ALEXIS',
            'navbar' => 'projects',
            'og_description' => 'Portfolio HENRY ALEXIS - Projects',
            'projects' => $Projects
        ]);
    }

    public function TargetProject(string $name): string
    {
        return $name;
    }

}
