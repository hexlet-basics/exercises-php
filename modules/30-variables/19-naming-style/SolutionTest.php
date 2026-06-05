<?php

namespace HexletBasics\Variables\Naming;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = "2000";
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
