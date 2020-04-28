<?php

namespace HexletBasics\Arithmetics\Commutativity;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = '2432';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
