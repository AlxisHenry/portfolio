<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

class Language
{

    /**
     * @return array
     */
    public static function all(): array 
    {
        return [
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
    }

    /**
     * 
     * @return array
     */
    public static function links():array 
    {
        $files = Storage::disk('public-content')->allFiles('assets/svg/languages');
        sort($files);
        $languages = [];
        foreach ($files as $file) {
            $language_name = explode('.', $file)[1];
            $languages[] = "<a href='". route("languages.show", [
                'name' => $language_name
            ]) ."'><img src='". url($file) ."' alt='$language_name' title='$language_name' class='language_icon'></a>";
        }
        return $languages;
    }

    public static function match(string $lang): string|bool
    {
        return array_key_exists($lang, self::all()) ? self::all()[$lang] : false;
    }

    public static function random():string
    {
        return array_rand(self::all());
    }

}