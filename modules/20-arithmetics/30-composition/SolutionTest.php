<?php

namespace HexletBasics\Arithmetics\Composition;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = '660';
        $this->expectOutputString($expected);
        require 'Solution.php';
    }
}
