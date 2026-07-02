<?php

namespace HexletBasics\Arithmetics\FloatingPointNumbers;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = '5.5511151231258E-17';
        $this->assertOutput($expected);
    }
}
