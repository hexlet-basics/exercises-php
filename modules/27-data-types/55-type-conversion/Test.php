<?php

namespace HexletBasics\DataTypes\TypeConversion;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = '2 times';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
