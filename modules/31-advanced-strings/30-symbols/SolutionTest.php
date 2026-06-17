<?php

namespace HexletBasics\AdvancedStrings\Symbols;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'grip';
        $this->expectOutputString($expected);
    }
}
