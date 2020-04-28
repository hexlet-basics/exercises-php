<?php

namespace HexletBasics\CallingFunctions\Expression;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = "80";
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
