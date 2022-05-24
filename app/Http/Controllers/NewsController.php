<?php

namespace App\Http\Controllers;
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

        $TECH_CARDS = DB::table('news_article')
                      ->join('news_dates', 'news_article.identifier', '=', 'news_dates.identifier')
                      ->join('news_images', 'news_article.identifier', '=', 'news_images.identifier')
                      ->join('news_themes', 'news_article.identifier', '=', 'news_themes.identifier')
                      ->where('news_themes.ThemePrincipal', '=', ' Technologique ')
                      ->get();

        $JURI_CARDS = DB::table('news_article')
                      ->join('news_dates', 'news_article.identifier', '=', 'news_dates.identifier')
                      ->join('news_images', 'news_article.identifier', '=', 'news_images.identifier')
                      ->join('news_themes', 'news_article.identifier', '=', 'news_themes.identifier')
                      ->where('news_themes.ThemePrincipal', '=', 'Juridique')
                      ->get();

        return view('templates.news', ['title' => 'News - Henry Alexis',
                                         'navbar' => 'news',
                                         'og_description' => 'Portfolio Henry Alexis - News Articles France Inter / CNIL',
                                         'TECH_CARDS' => $TECH_CARDS,
                                         'JURI_CARDS' => $JURI_CARDS,
                                         'Google' => $Google]);
    }

    /**
     * @throws \ErrorException
     */
    public function NewsArticle(string $ARTICLE_URL_NAME)
    {
        $Google = $this->GoogleTranslate();
        $ARTICLE = DB::table('news_article')
                   ->join('news_dates', 'news_article.identifier', '=', 'news_dates.identifier')
                   ->join('news_images', 'news_article.identifier', '=', 'news_images.identifier')
                   ->join('news_themes', 'news_article.identifier', '=', 'news_themes.identifier')
                   ->where('news_article.UrlArticle', 'like', '%' . $ARTICLE_URL_NAME . '%')
                   ->get();

        return view('templates.article', ['title' => 'News - Henry Alexis',
                                            'og_description' => 'Portfolio Henry Alexis - News Articles France Inter / CNIL',
                                            'navbar' => 'null',
                                            'ARTICLE' => $ARTICLE,
                                            'unwanted_array' => $this->UnwantedCharacters(),
                                            'Google' => $Google]);

    }

    public function NewsKeyword(string $KEYWORD) {

        $Google = $this->GoogleTranslate();

        $CORRESPONDING_KEYWORD_ARTICLE = DB::table('news_article')
                                         ->join('news_dates', 'news_article.identifier', '=', 'news_dates.identifier')
                                         ->join('news_images', 'news_article.identifier', '=', 'news_images.identifier')
                                         ->join('news_themes', 'news_article.identifier', '=', 'news_themes.identifier')
                                         ->where('news_themes.Theme', 'like', '%' . $KEYWORD . '%')
                                         ->limit(10)
                                         ->get();

        return view('templates.keyword', ['title' => $KEYWORD . ' - Henry Alexis',
                                            'KEYWORD' => $KEYWORD,
                                            'navbar' => 'null',
                                            'og_description' => 'Portfolio Henry Alexis - News Articles France Inter / CNIL',
                                            'CORRESPONDING_KEYWORD_ARTICLE' => $CORRESPONDING_KEYWORD_ARTICLE,
                                            'Google' => $Google]);

    }

}
