<?php

namespace HexletBasics\Conditionals\TernaryOperator;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'Solution.php';

        $this->assertEquals('flop', flipFlop('flip'));
        $this->assertEquals('flip', flipFlop('flop'));
        $this->assertEquals('flip', flipFlop(''));
    }
}
