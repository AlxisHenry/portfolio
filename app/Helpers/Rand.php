<?php

namespace App\Helpers;

class Rand
{

    /**
     * @param int $length
     * 
     * @return string
     */
    public static function string(int $length = 10): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    /**
     * @param int $min
     * @param int $max
     * 
     * @return int
     */
    public static function int(int $min = 0, int $max = 10):int 
    {

        return rand($min, $max);

    }

}