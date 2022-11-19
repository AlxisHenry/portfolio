<?php

namespace App\Http\Controllers;

use App\Helpers\Rand;
use App\Helpers\Skills;
use App\Random\Random;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Routing\Controller;

class LegalNoticeController extends Controller
{
    public function index()
    {
        return view('pages.legals', [
            'title' => 'Portfolio - HENRY ALEXIS',
            'navbar' => '',
            'og_description' => 'Portfolio - HENRY ALEXIS - Homepage'
        ]);
    }
}
