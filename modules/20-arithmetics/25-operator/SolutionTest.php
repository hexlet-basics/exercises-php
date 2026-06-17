<?php

namespace HexletBasics\Arithmetics\Operator;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = '8729';
        $this->expectOutputString($expected);
        require 'Solution.php';
    }
}
