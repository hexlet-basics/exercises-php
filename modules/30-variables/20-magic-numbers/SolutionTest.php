<?php

namespace HexletBasics\Variables\MagicNumbers;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = "Ящиков на складе:\n102";
        $this->expectOutputString($expected);
        require 'Solution.php';
    }
}
