<?php

namespace HexletBasics\Loops\ReturnFromLoop;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';
        $this->assertTrue(hasChar('Hexlet', 'H'));
        $this->assertFalse(hasChar('Hexlet', 'h'));
        $this->assertTrue(hasChar('Awesomeness', 'm'));
        $this->assertFalse(hasChar('Awesomeness', 'd'));
    }
}
