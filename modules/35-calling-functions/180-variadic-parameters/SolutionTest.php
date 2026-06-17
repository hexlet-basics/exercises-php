<?php

namespace HexletBasics\CallingFunctions\VariadicParameters;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = '-3';
        $this->expectOutputString($expected);
    }
}
