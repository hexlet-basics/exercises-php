<?php

namespace HexletBasics\CallingFunctions\Call;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = "125";
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
