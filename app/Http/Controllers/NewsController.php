<?php

namespace App\Http\Controllers;

use App\Helpers\Regex;
use App\Helpers\Translate;
use App\Models\News;
use DateTime;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Date;

class NewsController extends Controller
{

    const RSS_URL = "https://www.01net.com/actualites/technos/feed/";

    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {

        $content = file_get_contents(self::RSS_URL);
        $arr = simplexml_load_string($content);

        $rss = [];

        foreach ($arr->channel->item as $item) {
            $date = \Carbon\Carbon::createFromFormat('D, d M Y H:i:s O', (string) $item->pubDate);
            $date->locale('fr_FR');
            $news = new News();
            $news->title = (string) $item->title;
            $news->LinkImage = (string) $arr->channel->image->url;
            $news->UrlArticle = (string) $item->link;
            $news->published_at = $date->format('d-m-y');
            $rss[] = $news;
        }

        $rss = array_chunk($rss, 4);
        
        $categories = [
            "Flux RSS 01.net" => [
                (string) $arr->channel->link,
                collect($rss[0])
            ],
            ...News::categories()
        ];

        return view('pages.news', [
            'title' => 'News - Henry Alexis',
            'show_all_status' => false,
            'navbar' => 'news',
            'og_description' => 'Portfolio Henry Alexis - News Articles France Inter / CNIL',
            'categories' => $categories,
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
