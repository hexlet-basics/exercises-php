<?php

namespace HexletBasics\Variables\Symbols;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'hodor';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
