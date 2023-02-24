<?php

namespace App\Http\Controllers;

use App\Helpers\Regex;
use App\Helpers\Translate;
use App\Models\News;
use Illuminate\Routing\Controller;

class NewsController extends Controller
{

    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.news', [
            'title' => 'News - Henry Alexis',
            'show_all_status' => false,
            'navbar' => 'news',
            'og_description' => 'Portfolio Henry Alexis - News Articles France Inter / CNIL',
            'categories' => News::categories(),
            'Google' => Translate::google()
        ]);
    }

    public function show(string $url): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {        
        return view('pages.article', [
            'title' => 'News - HENRY ALEXIS',
            'og_description' => 'Portfolio Henry Alexis - News Articles France Inter / CNIL',
            'navbar' => 'news',
            'ARTICLE' => News::url($url)->first(),
            'unwanted_array' => Regex::characters(),
            'Google' => Translate::google()
        ]);
    }

    public function keyword(string $key)
    {
        $newsRelatedToThisKeyword = News::keyword($key);
        $no_items = false;
        if(count($newsRelatedToThisKeyword) === 0) $no_items = true;
        return view('pages.news', [
            'title' => Translate::google()->translate($key) . ' - Henry Alexis',
            'show_all_status' => true,
            'word' => $key,
            'items' => $no_items,
            'navbar' => 'news',
            'og_description' => 'Portfolio Henry Alexis - News Articles France Inter / CNIL',
            'related_news' => $newsRelatedToThisKeyword,
            'Google' => Translate::google()
        ]);
    }

}
