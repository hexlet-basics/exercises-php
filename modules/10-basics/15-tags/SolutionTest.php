<?php

namespace HexletBasics\Basics\Tags;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'King in the North!';
        $this->expectOutputString($expected);
        require 'Solution.php';
    }
}
