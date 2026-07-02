<?php

namespace HexletBasics\CallingFunctions\Expression;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = "First: H\nLast: !";
        $this->assertOutput($expected);
    }
}
