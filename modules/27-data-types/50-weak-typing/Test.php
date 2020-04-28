<?php

namespace HexletBasics\DataTypes\WeakTyping;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = '13';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
