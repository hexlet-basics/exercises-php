<?php

namespace HexletBasics\Variables\Expressions;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = "125\n7500";
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
