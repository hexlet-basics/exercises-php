<?php

namespace HexletBasics\Loops\ReturnFromLoops;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'index.php';

        $this->assertTrue(hasAtSymbol('support@example.com'));
        $this->assertFalse(hasAtSymbol('wrong-email'));
        $this->assertTrue(hasAtSymbol('@admin'));
        $this->assertTrue(hasAtSymbol('admin@'));
    }
}
