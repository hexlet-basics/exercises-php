<?php

namespace HexletBasics\Arithmetics\FloatingPointNumbers;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = '5.5511151231258E-17';
        $this->expectOutputString($expected);
        require 'Solution.php';
    }
}
