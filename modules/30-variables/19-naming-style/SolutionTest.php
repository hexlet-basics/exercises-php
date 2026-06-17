<?php

namespace HexletBasics\Variables\Naming;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = "2000";
        $this->expectOutputString($expected);
    }
}
