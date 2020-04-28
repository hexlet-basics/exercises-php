<?php

namespace HexletBasics\Variables\Interpolation;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = 'Do you want to eat, Arya?';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
