<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use App\FizzBuzz;

class FizzBuzzTest extends TestCase
{

    public function test_is_not_divide_by_5_and_3_return_fizzbuzz()
    {
        $fizzBuzz = new FizzBuzz();

        foreach ([1,2,7] as $num) {
            $this->assertEquals($num, $fizzBuzz->solve($num));
        }
    }

    public function test_it_divide_by_3_return_fizz()
    {
        $fizzBuzz = new FizzBuzz();

        foreach ([3,6,9] as $num) {
            $this->assertEquals('Fizz', $fizzBuzz->solve($num));
        }
    }

    public function test_it_divide_by_5_return_buzz()
    {
        $fizzBuzz = new FizzBuzz();

        foreach ([5,10] as $num) {
            $this->assertEquals('Buzz', $fizzBuzz->solve($num));
        }
    }

    public function test_it_divide_by_5_and_3_return_fizzbuzz()
    {
        $fizzBuzz = new FizzBuzz();

        foreach ([15,30,60] as $num) {
            $this->assertEquals('FizzBuzz', $fizzBuzz->solve($num));
        }

    }


}
