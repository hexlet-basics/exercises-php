<?php

namespace HexletBasics\Basics\Instructions;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'RobertStannisRenly';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
