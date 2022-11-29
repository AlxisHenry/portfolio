<?php

namespace App\Helpers;

use stdClass;

class Wikipedia
{
 
    /**
     * @param string $lang
     * 
     * @return stdClass
     */
    public static function query(string $lang): stdClass
    {
        $url = "https://en.wikipedia.org/w/api.php?action=query&titles=$lang&prop=extracts&format=json&exintro=1";
        $content = json_decode(file_get_contents($url));
        return $content->query->pages;
    }
    
}