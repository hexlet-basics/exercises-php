<?php

namespace HexletBasics\CallingFunctions\Stdlib;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = 'string';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
