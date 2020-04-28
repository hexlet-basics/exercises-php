<?php

namespace HexletBasics\Arithmetics\Priority;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = '49';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
