<?php

namespace HexletBasics\Variables\Symbols;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = 'hodor';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
