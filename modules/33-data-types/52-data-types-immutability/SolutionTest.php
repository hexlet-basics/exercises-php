<?php

namespace HexletBasics\DataTypes\DataTypesImmutability;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'print';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
