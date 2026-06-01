<?php

namespace HexletBasics\DataTypes\PrimitiveDataTypes;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = '-0.304';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
