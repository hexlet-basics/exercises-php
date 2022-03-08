<?php

namespace HexletBasics\Loops\ReturnFromLoop;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';
        assert(hasChar('Hexlet', 'H'));
        assert(!hasChar('Hexlet', 'h'));
        assert(hasChar('Awesomeness', 'm'));
        assert(!hasChar('Awesomeness', 'd'));
    }
}
