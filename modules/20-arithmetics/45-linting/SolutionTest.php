<?php

namespace HexletBasics\Arithmetics\Linting;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = '4';
        $this->expectOutputString($expected);
        require 'Solution.php';
    }
}
