<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

class Skills
{
    const FRONT = [
        'javascript', 
        'vuejs', 
        'react', 
        'typescript', 
        'jquery', 
        'scss'
    ];

    const BACK = [
        'php', 
        'nodejs', 
        'laravel',
        'symfony',
    ];

    public static function format(string $path): string
    {
        $parts = explode('/', $path);
        return str_replace('.svg', '', $parts[count($parts) - 1]);
    }


    public static function all(): array 
    {
        $files = Storage::disk('public-content')->allFiles('assets/svg/skills');
        $skills = [
            "tech" => [],
            "front" => [],
            "back" => []
        ];
        foreach ($files as $k => $file) {
            $language = self::format($file);
            if (in_array($language, self::FRONT)) {
                $skills["front"][$k] = $language;  
            } else if (in_array($language, self::BACK)) {
                $skills["back"][$k] = $language;
            }
            $skills["tech"][$k] = $language;
        }   
        return $skills;
    }

}