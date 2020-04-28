<?php

namespace HexletBasics\CallingFunctions\FunctionsAsArguments;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = 'Tywin Lannister';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
