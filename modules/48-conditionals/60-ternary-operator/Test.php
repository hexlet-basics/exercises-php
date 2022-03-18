<?php

namespace HexletBasics\Logic\TernaryOperator;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        assert(flip_flop('flip') === 'flop');
        assert(flip_flop('flop') === 'flip');
        assert(flip_flop('') === 'flip');
    }
}
