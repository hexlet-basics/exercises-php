<?php

namespace HexletBasics\Loops\ReturnFromLoops;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $this->assertTrue(hasAtSymbol('support@example.com'));
        $this->assertFalse(hasAtSymbol('wrong-email'));
        $this->assertTrue(hasAtSymbol('@admin'));
        $this->assertTrue(hasAtSymbol('admin@'));
    }
}
