<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{

    public function __construct()
    {

    }

    public function Projects() {
        return view('projects', ['title' => 'Projects - Henry Alexis', 'navbar' => 'projects', 'og_description' => 'Portfolio Henry Alexis - Projects']);
    }

}
