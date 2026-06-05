<?php

namespace HexletBasics\CallingFunctions\VariadicParameters;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = '-3';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
