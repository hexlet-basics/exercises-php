<?php

namespace HexletBasics\CallingFunctions\ArgumentsAsExpressions;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = "20";
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
