<?php

namespace HexletBasics\Basics\Testing;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = '9780262531962';
        $this->assertOutput($expected);
    }
}
