<?php

namespace HexletBasics\DeepIntoStrings\Locales;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = setlocale(LC_CTYPE, 0);
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
