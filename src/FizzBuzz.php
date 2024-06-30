<?php

namespace App;

class FizzBuzz
{

    public function solve(int $num) : string
    {
        $resurt = null;

        if ($num % 3 == 0) {
            $resurt .= "Fizz";
        }

        if ($num % 5 == 0) {
            $resurt .= "Buzz";
        }

        return $resurt??$num;
    }

}