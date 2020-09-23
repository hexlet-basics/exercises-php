<?php

namespace HexletBasics\Loops\ReturnFromLoop;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';
        assert(hasChar('Renly', 'R'));
        assert(!hasChar('Renly', 'r'));
        assert(hasChar('Tommy', 'm'));
        assert(!hasChar('Tommy', 'd'));
    }
}
