<?php

namespace HexletBasics\AdvancedStrings\Interpolation;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'Hello, Anna! Your order #1337 has been accepted.';
        $this->assertOutput($expected);
    }
}
