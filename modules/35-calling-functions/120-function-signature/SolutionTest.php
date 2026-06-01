<?php

namespace HexletBasics\CallingFunctions\FunctionSignature;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'Mount';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
