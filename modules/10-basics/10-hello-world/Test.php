<?php

namespace HexletBasics\Basics\HelloWorld;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = 'Hello, World!';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
