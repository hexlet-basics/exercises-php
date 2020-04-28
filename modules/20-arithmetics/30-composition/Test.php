<?php

namespace HexletBasics\Arithmetics\Composition;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = '10.5';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
