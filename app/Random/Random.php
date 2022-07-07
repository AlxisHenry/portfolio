<?php

namespace App\Random;

class Random
{

    public function GetRandomNumber():int {

        return random_int(1, 40);

    }

}