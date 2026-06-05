<?php

namespace HexletBasics\Arithmetics\Priority;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = '160';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
