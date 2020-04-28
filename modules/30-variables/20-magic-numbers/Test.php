<?php

namespace HexletBasics\Variables\MagicNumbers;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = 'King Balon the 6th has 102 rooms.';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
