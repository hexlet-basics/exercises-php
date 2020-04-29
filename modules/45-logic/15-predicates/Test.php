<?php

namespace HexletBasics\Logic\Predicates;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        assert(!isMister('8234782'));
        assert(!isMister('Joker'));
        assert(isMister('Mister'));
    }
}
