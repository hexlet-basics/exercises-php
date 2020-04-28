<?php

namespace HexletBasics\Arithmetics\Basics;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = '9';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
