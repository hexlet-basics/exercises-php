<?php

namespace HexletBasics\Loops\Mutators;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'index.php';
        $text = 'I never look back';
        $this->assertEquals('I NevEr LooK bAck', makeItFunny($text, 3));
        $this->assertEquals('hElLo', makeItFunny('hello', 2));
    }
}
