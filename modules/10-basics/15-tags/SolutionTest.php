<?php

namespace HexletBasics\Basics\Tags;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'King in the North!';
        $this->assertOutput($expected);
    }
}
