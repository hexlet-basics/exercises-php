<?php

namespace HexletBasics\Arithmetics\Operator;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = '87';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
