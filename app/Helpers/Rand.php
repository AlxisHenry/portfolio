<?php

namespace App\Helpers;

class Rand
{

    /**
     * @var string $letters
     */
    private string $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    /**
     * @var string $specialsCharacters
     */
    private string $specialsCharacters = '!@#$%^&*()_+{}|:"<>?';

    /**
     * @var string $numbers
     */
    private string $numbers = '0123456789';

    /**
     * @return bool
     */
    public static function bool(): bool
    {
        return (bool) rand(0, 1);
    }

    /**
     * @param int $length                   Length of the string to generate
     * @param bool $withNumbers             Include numbers in the variable
     * @param bool $withSpecialsCharacters  Include specials characters in the variable
     * 
     * @return string
     */
    public static function lorem(int $length = 16, bool $withNumbers = false, bool $withSpecialsCharacters = false): string
    {
        /** @var string $characters */
        $characters = self::$letters . ($withNumbers ? self::$numbers : '') . ($withSpecialsCharacters ? self::$specialsCharacters : '');
        /** @var int $charactersLength */
        $charactersLength = strlen($characters);
        /** @var string $lorem */
        $lorem = '';
        for ($i = 0; $i <= $length; $i++) {
            $lorem .= $characters[rand(0, $charactersLength - 1)];
        }
        return $lorem;
    }

    /**
     * @param int $min
     * @param int $max
     * 
     * @return int
     */
    public static function int(int $min = 0, int $max = 10):int 
    {

        return (int) rand($min, $max);

    }

}