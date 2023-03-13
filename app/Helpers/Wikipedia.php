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
        $content = file_get_contents($url);
        if (!is_string($content)) {
            throw new \Exception("The content is not a string but an instance of " . typeOf($content) . " instead.");
        }
        $r = json_decode($content);
        return $r->query->pages;
    }
    
}