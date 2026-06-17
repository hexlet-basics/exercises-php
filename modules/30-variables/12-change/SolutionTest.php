<?php

namespace HexletBasics\Variables\Change;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'доставлен';
        $this->expectOutputString($expected);
    }
}
