<?php

namespace HexletBasics\Loops\Mutators;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';
        $text = 'I never look back';
        assert(makeItFunny($text, 3) === 'I NevEr LooK bAck');
        assert(makeItFunny('hello', 2) === 'hElLo');
    }
}
