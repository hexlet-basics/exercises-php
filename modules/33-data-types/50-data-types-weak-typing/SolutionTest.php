<?php

namespace HexletBasics\DataTypes\WeakTyping;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = '13';
        $this->expectOutputString($expected);
    }
}
