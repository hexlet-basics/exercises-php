<?php

namespace HexletBasics\Loops\Mutators;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $text = 'I never look back';
        $this->assertEquals('I NevEr LooK bAck', makeItFunny($text, 3));
        $this->assertEquals('hElLo', makeItFunny('hello', 2));
    }
}
