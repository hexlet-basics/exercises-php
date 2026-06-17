<?php

namespace HexletBasics\Variables\Change;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'доставлен';
        $this->expectOutputString($expected);
        require 'Solution.php';
    }
}
