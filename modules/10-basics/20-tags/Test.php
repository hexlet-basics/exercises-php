<?php

namespace HexletBasics\Basics\Tags;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = 'King in the North!';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
