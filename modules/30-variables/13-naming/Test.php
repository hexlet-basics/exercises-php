<?php

namespace HexletBasics\Variables\Naming;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = "2";
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
