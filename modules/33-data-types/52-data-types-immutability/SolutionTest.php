<?php

namespace HexletBasics\DataTypes\DataTypesImmutability;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'print';
        $this->expectOutputString($expected);
    }
}
