<?php

namespace HexletBasics\CallingFunctions\DefaultParams;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = "37.8\n2426.76\n607\n";
        $this->expectOutputString($expected);
    }
}
