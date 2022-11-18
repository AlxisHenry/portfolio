<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

class Skills
{
    public static function all(): array {
        return [
            'tech' => [
                'bash', 
                'apache', 
                'nginx', 
                'docker', 
                'vagrant', 
                'git', 
                'phpstorm', 
                'vscode', 
                'python'
            ],
            'front' => [
                'javascript', 
                'vuejs', 
                'react', 
                'typescript', 
                'jquery', 
                'scss'
            ],
            'back' => [
                'php', 
                'nodejs', 
                'laravel'
            ]
        ];
    }

}