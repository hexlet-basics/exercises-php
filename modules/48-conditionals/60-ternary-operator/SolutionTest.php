<?php

namespace HexletBasics\Conditionals\TernaryOperator;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $this->assertEquals('flop', flipFlop('flip'));
        $this->assertEquals('flip', flipFlop('flop'));
        $this->assertEquals('flip', flipFlop(''));
    }
}
