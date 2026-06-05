<?php

namespace HexletBasics\CallingFunctions\Expression;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = "First: H\nLast: !";
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
