<?php

namespace HexletBasics\Logic\Predicates;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        assert(!isMister('8234782'));
        assert(!isMister('Joker'));
        assert(isMister('Mister'));
    }
}
