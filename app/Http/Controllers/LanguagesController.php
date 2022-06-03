<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguagesController extends Controller
{

    public function __construct()
    {
    }

    public function WIKIPEDIA_API_QUERY($LANGUAGE) {
        $url = "https://en.wikipedia.org/w/api.php?action=query&titles=$LANGUAGE&prop=extracts&format=json&exintro=1";
        $content = json_decode(file_get_contents($url));
        return $content->query->pages;
    }

    public function WikipediaDefinition(string $LANGUAGE): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {

        $FORMAT_LANGUAGE = match ($LANGUAGE) {
            'html' => 'HTML',
            'scss','sass' => 'Sass_(stylesheet_language)',
            'go' => 'Go_(programming_language)',
            'css' => 'CSS',
            'react' => 'React_(JavaScript_library)',
            'typescript' => 'TypeScript',
            'swift' => 'Swift_(programming_language)',
            'vuejs' => 'Vue.js',
            'docker' => 'Docker_(software)',
            'vagrant' => 'Vagrant_(software)',
            'javascript' => 'JavaScript',
            'php' => 'PHP',
            'nodejs' => 'Node.js',
            'python' => 'Python_(programming_language)',
            'laravel' => 'Laravel',
            'powershell' => 'PowerShell',
            'bash' => 'Bash_(Unix_shell)',
            default => null
        };

        if($FORMAT_LANGUAGE) {
            return view('templates.language', ['title' => 'Language',
                                                    'navbar' => 'null',
                                                    'url' => 'https://en.wikipedia.org/wiki/' . $FORMAT_LANGUAGE,
                                                    'LANGUAGE' => $this->WIKIPEDIA_API_QUERY($FORMAT_LANGUAGE)]);
        }

        return abort(404);

    }

}
