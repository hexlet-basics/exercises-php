<?php

namespace HexletBasics\Arithmetics\Basics;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = '9';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
