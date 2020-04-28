<?php

namespace HexletBasics\Arithmetics\Linting;

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
