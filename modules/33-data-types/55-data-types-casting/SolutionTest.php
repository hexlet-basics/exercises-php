<?php

namespace HexletBasics\DataTypes\DataTypesCasting;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = '36 °C';
        $this->expectOutputString($expected);
        require 'Solution.php';
    }
}
