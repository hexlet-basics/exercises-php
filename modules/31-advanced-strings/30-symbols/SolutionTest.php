<?php

namespace HexletBasics\AdvancedStrings\Symbols;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'grip';
        $this->expectOutputString($expected);
        require 'Solution.php';
    }
}
