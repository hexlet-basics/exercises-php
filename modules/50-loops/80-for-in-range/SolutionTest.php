<?php

namespace HexletBasics\Loops\ForInRange;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'index.php';

        $this->assertEquals('1', fizzbuzz(1));
        $this->assertEquals('1 2 Fizz', fizzbuzz(3));
        $this->assertEquals('1 2 Fizz 4 Buzz', fizzbuzz(5));
        $this->assertEquals('1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz 13 14 FizzBuzz', fizzbuzz(15));
    }
}
