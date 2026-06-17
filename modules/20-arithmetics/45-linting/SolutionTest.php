<?php

namespace HexletBasics\Arithmetics\Linting;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = '4';
        $this->expectOutputString($expected);
    }
}
