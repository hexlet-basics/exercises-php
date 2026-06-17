<?php

namespace HexletBasics\DataTypes\DataTypesCasting;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = '36 °C';
        $this->expectOutputString($expected);
    }
}
