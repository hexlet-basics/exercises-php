<?php

namespace HexletBasics\Variables\Naming;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = "2";
        $this->expectOutputString($expected);
        require 'Solution.php';
    }
}
