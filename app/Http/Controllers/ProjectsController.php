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
        return view('layouts.projects', ['title' => 'Projects - Henry Alexis', 'navbar' => 'projects', 'og_description' => 'Portfolio Henry Alexis - Projects']);
    }

}
