<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class LegalNoticeController extends Controller
{
    public function index()
    {
        $lastUpdated = now()->format('F d, Y');
        return view('pages.legals', [
            'title' => 'Portfolio - HENRY ALEXIS',
            'navbar' => '',
            'og_description' => 'Portfolio - HENRY ALEXIS - Homepage',
            'lastUpdated' => $lastUpdated,
        ]);
    }
}
