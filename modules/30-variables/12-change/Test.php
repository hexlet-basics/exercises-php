<?php

namespace HexletBasics\Variables\Change;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = 'anneirB';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
