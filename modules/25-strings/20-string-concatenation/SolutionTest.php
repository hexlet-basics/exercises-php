<?php

namespace HexletBasics\Strings\Concatenation;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'https://github.com/hexlet/exercises-php';
        $this->expectOutputString($expected);
    }
}
