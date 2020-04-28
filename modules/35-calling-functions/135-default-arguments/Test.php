<?php

namespace HexletBasics\CallingFunctions\DefaultArguments;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = '10.12';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
