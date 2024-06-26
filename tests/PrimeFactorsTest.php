<?php

namespace tests;

use App\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    function test_it_generates_prime_factors()
    {
        foreach ($this->factors() as $factor) {
            $this->assertEquals($factor[1], (new PrimeFactors)->generate($factor[0]));
        }
    }

    public function factors()
    {
        return [
            [1, []],
            [2, [2]],
            [3, [3]],
            [4, [2, 2]],
            [5, [5]],
            [6, [2, 3]],
            [7, [7]],
            [8, [2, 2, 2]],
            [9, [3, 3]],
            [10, [2, 5]],
            [125, [5, 5, 5]],
            [210, [2, 3, 5, 7]],
        ];
    }


}
