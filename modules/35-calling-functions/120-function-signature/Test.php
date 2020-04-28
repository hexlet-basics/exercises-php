<?php

namespace HexletBasics\CallingFunctions\FunctionSignature;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = 'Mount';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
