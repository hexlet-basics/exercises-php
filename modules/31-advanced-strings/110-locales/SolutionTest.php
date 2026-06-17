<?php

namespace HexletBasics\AdvancedStrings\Locales;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = setlocale(LC_CTYPE, 0);
        $this->expectOutputString($expected);
    }
}
