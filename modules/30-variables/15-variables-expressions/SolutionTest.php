<?php

namespace HexletBasics\Variables\Expressions;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = "125\n863.75";
        $this->assertOutput($expected);
    }
}
