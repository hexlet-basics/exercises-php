<?php

namespace HexletBasics\CallingFunctions\Call;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = "12";
        $this->expectOutputString($expected);
    }
}
