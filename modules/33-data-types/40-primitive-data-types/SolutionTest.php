<?php

namespace HexletBasics\DataTypes\PrimitiveDataTypes;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = <<<HERE
Name: Anna
Birth year: 1994
Age: 32
Rating: 4.7
HERE;

        $this->expectOutputString($expected);
    }
}
