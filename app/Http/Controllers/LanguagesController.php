<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class LanguagesController extends Controller
{

    public function __construct()
    {
    }

    public function MatchLanguages(bool $take, string $lang = null): string|array
    {

        $Languages = [
            'html' => 'HTML',
            'scss' => 'Sass_(stylesheet_language)',
            'sass' => 'Sass_(stylesheet_language)',
            'go' => 'Go_(programming_language)',
            'css' => 'CSS',
            'reactjs' => 'React_(JavaScript_library)',
            'react' => 'React_(JavaScript_library)',
            'typescript' => 'TypeScript',
            'swift' => 'Swift_(programming_language)',
            'vuejs' => 'Vue.js',
            'docker' => 'Docker_(software)',
            'vagrant' => 'Vagrant_(software)',
            'javascript' => 'JavaScript',
            'js' => 'JavaScript',
            'ts' => 'TypeScript',
            'php' => 'PHP',
            'nodejs' => 'Node.js',
            'node' => 'Node.js',
            'python' => 'Python_(programming_language)',
            'py' => 'Python_(programming_language)',
            'laravel' => 'Laravel',
            'powershell' => 'PowerShell',
            'bash' => 'Bash_(Unix_shell)',
            'sh' => 'Bash_(Unix_shell)',
        ];

        if ($take) {
            return $Languages;
        } else {
            if(array_key_exists($lang, $Languages)) {
                return $Languages[$lang];
            }
            return '';
        }
    }

    public function RANDOM_LANG():string
    {
        $all_languages = $this->MatchLanguages(true);
        return array_rand($all_languages);
    }

    public function WIKIPEDIA_API_QUERY(string $lang):stdClass {

        $url = "https://en.wikipedia.org/w/api.php?action=query&titles=$lang&prop=extracts&format=json&exintro=1";
        $content = json_decode(file_get_contents($url));
        return $content->query->pages;

    }

    public function WikipediaDefinition(string $lang): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {

        if ($lang === 'all') {
            $all_languages = $this->MatchLanguages(true);
            $languages = [];
            foreach ($all_languages as $k => $l) {
                in_array($l, $languages) ?  : $languages[$k] = $l;
            }
            return view('templates.language', [
                'title' => 'Languages - HENRY ALEXIS',
                'navbar' => 'null',
                'show_all_languages' => true,
                'languages' => $languages,
                'generate' => $this->RANDOM_LANG()
            ]);
        }

        $formatLang = $this->MatchLanguages(false, $lang);

        if($formatLang) {

            return view('templates.language', [
                'title' => ucfirst($lang) . ' - HENRY ALEXIS',
                'navbar' => 'null',
                'url' => 'https://en.wikipedia.org/wiki/' . $formatLang,
                'lang' => $this->WIKIPEDIA_API_QUERY($formatLang),
                'generate' => $this->RANDOM_LANG()
            ]);

        } else {

            return abort(404);
        }

    }
}
