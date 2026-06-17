<?php

namespace HexletBasics\Basics\Instructions;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'RobertStannisRenly';
        $this->expectOutputString($expected);
    }
}
