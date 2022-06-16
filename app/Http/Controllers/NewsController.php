<?php

namespace App\Http\Controllers;
use App\Models\News;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use League\Flysystem\Config;
use Illuminate\Routing\Controller;

class NewsController extends Controller
{

    public function __construct()
    {
    }

    public function GoogleTranslate(): GoogleTranslate
    {
        $Google = new GoogleTranslate();
        $Google->setSource('fr');
        $Google->setTarget('en');
        return $Google;
    }

    public function UnwantedCharacters():array {
        return array('Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
        'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
        'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
        'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
        'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );
    }

    public function News(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {

        $Google = $this->GoogleTranslate();

        $categories = [
            "pegasus" => News::pegasus(),
            "technologie" => News::technology(),
            "économie" => News::economy(),
            "internet" => News::internet(),
            "cybersécurité" => News::cyber(),
            "société" => News::society()
        ];

        return view('templates.news',
            ['title' => 'News - Henry Alexis',
             'navbar' => 'news',
             'og_description' => 'Portfolio Henry Alexis - News Articles France Inter / CNIL',
             'categories' => $categories,
             'Google' => $Google
            ]);
    }

    /**
     * @throws \ErrorException
     */
    public function NewsArticle(string $url): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $Google = $this->GoogleTranslate();
        $ARTICLE = News::url($url);


        return view('templates.article',
            ['title' => 'News - HENRY ALEXIS',
             'og_description' => 'Portfolio Henry Alexis - News Articles France Inter / CNIL',
             'navbar' => 'null',
             'ARTICLE' => $ARTICLE[0],
             'unwanted_array' => $this->UnwantedCharacters(),
             'Google' => $Google
            ]);

    }

    /**
     * @throws \ErrorException
     */
    public function NewsKeyword(string $key)
    {

        $Google = $this->GoogleTranslate();
        $related_news = News::keyword($key);

        if(count($related_news) === 0) {
            $no_items = true;
        } else {
            $no_items = false;
        }

        return view('templates.keyword',
            ['title' => ucfirst($Google->translate($key)) . ' - Henry Alexis',
             'word' => $key,
             'items' => $no_items,
             'navbar' => 'null',
             'og_description' => 'Portfolio Henry Alexis - News Articles France Inter / CNIL',
             'related_news' => $related_news,
             'Google' => $Google
            ]);
    }

}
