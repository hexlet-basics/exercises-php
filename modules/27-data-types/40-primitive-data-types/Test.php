<?php

namespace HexletBasics\DataTypes\PrimitiveDataTypes;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = '-0.304';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
