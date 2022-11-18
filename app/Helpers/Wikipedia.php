<?php

namespace App\Helpers;

class Wikipedia
{
    public static function query(string $lang) 
    {
        $url = "https://en.wikipedia.org/w/api.php?action=query&titles=$lang&prop=extracts&format=json&exintro=1";
        $content = json_decode(file_get_contents($url));
        return $content->query->pages;
    }
}