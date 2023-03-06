<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Routing\Controller;

class ResourceController extends Controller
{
    public function index()
    {
        return view('pages.resources', [
            'title' => 'Resources - HENRY ALEXIS',
            'navbar' => 'resources',
            'og_description' => 'Portfolio - HENRY ALEXIS - Resources',
            'resources' => Resource::latest()->get()
        ]);
    }
}
