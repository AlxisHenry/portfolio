<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProjectController extends Controller
{

    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.projects', [
            'title' => 'Projects - HENRY ALEXIS',
            'navbar' => 'projects',
            'og_description' => 'Portfolio HENRY ALEXIS - Projects',
            'projects' => Projects::orderBy("published_at")->get()
        ]);
    }

}
