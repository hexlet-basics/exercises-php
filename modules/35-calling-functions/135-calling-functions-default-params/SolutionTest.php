<?php

namespace HexletBasics\CallingFunctions\DefaultParams;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = "37.8\n2426.76\n607\n";
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
