<?php

namespace HexletBasics\Logic\TernaryOperator;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        $this->assertEquals('flop', flipFlop('flip'));
        $this->assertEquals('flip', flipFlop('flop'));
        $this->assertEquals('flip', flipFlop(''));
    }
}
