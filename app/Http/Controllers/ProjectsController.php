<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProjectsController extends Controller
{

    public function __construct()
    {

    }

    public function Projects() {
        return view('templates.projects', ['title' => 'Projects - HENRY ALEXIS',
                                                'navbar' => 'projects',
                                                'og_description' => 'Portfolio H - Projects']);
    }

}
