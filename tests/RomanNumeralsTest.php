<?php

namespace tests;

use App\RomanNumerals;
use PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase
{

    function test_generates_the_roman_numerals()
    {
        foreach (RomanNumeralsTest::checks() as $check) {
            $this->assertEquals($check[1], RomanNumerals::generate($check[0]));
        }
    }

    public static function checks()
    {
        return [
            [1, 'I'],
            [2, 'II'],
            [3, 'III'],
            [4, 'IV'],
            [5, 'V'],
            [6, 'VI'],
            [7, 'VII'],
            [8, 'VIII'],
            [9, 'IX'],
            [10, 'X'],
            [20, 'XX'],
            [30, 'XXX'],
            [40, 'XL'],
            [50, 'L'],
            [60, 'LX'],
            [70, 'LXX'],
            [80, 'LXXX'],
            [90, 'XC'],
            [100, 'C']
        ];

    }
}
