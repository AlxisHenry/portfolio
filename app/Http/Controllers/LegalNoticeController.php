<?php

namespace App\Http\Controllers;

use App\Helpers\Rand;
use Illuminate\Routing\Controller;

class LegalNoticeController extends Controller
{
    public function index()
    {
        $today = now()->format('F d, Y');
        $lastUpdated = now()->subDays(25)->format('F d, Y');
        return view('pages.legals', [
            'title' => 'Portfolio - HENRY ALEXIS',
            'navbar' => '',
            'og_description' => 'Portfolio - HENRY ALEXIS - Homepage',
            'today' => $today,
            'lastUpdated' => $lastUpdated,
            'random_number' => Rand::int()
        ]);
    }
}
