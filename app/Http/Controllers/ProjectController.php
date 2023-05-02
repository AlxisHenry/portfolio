<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Routing\Controller;

class ProjectController extends Controller
{

    public function index()
    {
        return view('pages.projects', [
            'title' => 'Projects',
            'navbar' => 'projects',
            'projects' => Project::where('is_active', true)->latest()->get()
        ]);
    }

}
