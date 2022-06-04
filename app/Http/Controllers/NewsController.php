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

    public function News() {

        $Google = $this->GoogleTranslate();

        $news = News::technology();

        return view('templates.news', ['title' => 'News - Henry Alexis',
                                         'navbar' => 'news',
                                         'og_description' => 'Portfolio Henry Alexis - News Articles France Inter / CNIL',
                                         'news' => $news,
                                         'Google' => $Google]);
    }

    /**
     * @throws \ErrorException
     */
    public function NewsArticle(string $url)
    {
        $Google = $this->GoogleTranslate();
        $ARTICLE = News::url($url);


        return view('templates.article', ['title' => 'News - Henry Alexis',
                                            'og_description' => 'Portfolio Henry Alexis - News Articles France Inter / CNIL',
                                            'navbar' => 'null',
                                            'ARTICLE' => $ARTICLE[0],
                                            'unwanted_array' => $this->UnwantedCharacters(),
                                            'Google' => $Google]);

    }

    public function NewsKeyword(string $key) {

        $Google = $this->GoogleTranslate();

        $CORRESPONDING_KEYWORD_ARTICLE = News::keyword($key);

        return view('templates.keyword', ['title' => $KEYWORD . ' - Henry Alexis',
                                            'KEYWORD' => $KEYWORD,
                                            'navbar' => 'null',
                                            'og_description' => 'Portfolio Henry Alexis - News Articles France Inter / CNIL',
                                            'CORRESPONDING_KEYWORD_ARTICLE' => $CORRESPONDING_KEYWORD_ARTICLE,
                                            'Google' => $Google]);

    }

}
