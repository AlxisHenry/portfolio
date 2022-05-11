<?php

namespace App\Http\Controllers;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use League\Flysystem\Config;

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

    public function News() {

        $Google = $this->GoogleTranslate();

        $TECH_CARDS = DB::select('SELECT Articles.identifier, Articles.title, Articles.UrlArticle, Images.LinkImage, Images.AltImage, Dates.UploadDate  
                                        FROM `Articles` 
                                        INNER JOIN Dates ON Articles.identifier = Dates.identifier
                                        INNER JOIN Images ON Articles.identifier = Images.identifier
                                        INNER JOIN Themes ON Articles.identifier = Themes.identifier
                                        WHERE Themes.ThemePrincipal = " Technologique " LIMIT 2;');

        $JURI_CARDS = DB::select('SELECT Articles.identifier, Articles.title, Articles.UrlArticle, Images.LinkImage, Images.AltImage, Dates.UploadDate 
                                        FROM `Articles`
                                        INNER JOIN Dates ON Articles.identifier = Dates.identifier
                                        INNER JOIN Images ON Articles.identifier = Images.identifier
                                        INNER JOIN Themes ON Articles.identifier = Themes.identifier
                                        WHERE Themes.ThemePrincipal = "Juridique" LIMIT 2');

        return view('@news@', ['title' => 'News - Henry Alexis',
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

        $ARTICLE = DB::select("SELECT * FROM `Articles`
                                     INNER JOIN Dates ON Articles.identifier = Dates.identifier
                                     INNER JOIN Images ON Articles.identifier = Images.identifier
                                     INNER JOIN Themes ON Articles.identifier = Themes.identifier
                                     WHERE Articles.UrlArticle LIKE '%$ARTICLE_URL_NAME%'");

        return view('@news_article@', ['title' => 'News - Henry Alexis',
            'og_description' => 'Portfolio Henry Alexis - News Articles France Inter / CNIL',
            'ARTICLE' => $ARTICLE,
            'Google' => $Google]);

    }

    public function NewsKeyword(string $KEYWORD) {

        $Google = $this->GoogleTranslate();

        $CORRESPONDING_KEYWORD_ARTICLE = DB::select("SELECT * FROM `Articles`
                                                           INNER JOIN Dates ON Articles.identifier = Dates.identifier
                                                           INNER JOIN Images ON Articles.identifier = Images.identifier
                                                           INNER JOIN Themes ON Articles.identifier = Themes.identifier
                                                           WHERE Themes.Theme LIKE '%$KEYWORD%'");

        return view('@news_keyword@', ['title' => $KEYWORD . ' - Henry Alexis',
            'KEYWORD' => $KEYWORD,
            'og_description' => 'Portfolio Henry Alexis - News Articles France Inter / CNIL',
            'CORRESPONDING_KEYWORD_ARTICLE' => $CORRESPONDING_KEYWORD_ARTICLE,
            'Google' => $Google]);

    }

}
