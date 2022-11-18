<?php

namespace App\Helpers;

use Stichoza\GoogleTranslate\GoogleTranslate;

class Translate
{

	/**
	 * 
	 * @return GoogleTranslate
	 */
    public static function google(): GoogleTranslate
    {
        $g = new GoogleTranslate();
        $g->setSource('fr');
        $g->setTarget('en');
        return $g;
    }

}