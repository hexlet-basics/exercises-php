<?php

namespace HexletBasics\AdvancedStrings\Unicode;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = "13\n7\n";
        $this->expectOutputString($expected);
    }
}
