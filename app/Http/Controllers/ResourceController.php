<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Routing\Controller;

class ResourceController extends Controller
{
    public function index()
    {
        return view('pages.resources', [
            'title' => 'Resources',
            'navbar' => 'resources',
            'resources' => Resource::where('is_active', true)->latest()->get() 
        ]);
    }
}
