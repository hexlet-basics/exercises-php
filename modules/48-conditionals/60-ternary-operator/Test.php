<?php

namespace HexletBasics\Logic\TernaryOperator;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        assert(flipFlop('flip') === 'flop');
        assert(flipFlop('flop') === 'flip');
        assert(flipFlop('') === 'flip');
    }
}
