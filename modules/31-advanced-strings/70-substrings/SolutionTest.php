<?php

namespace HexletBasics\AdvancedStrings\Slices;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'hexlet.io';
        $this->expectOutputString($expected);
    }
}
