<?php

namespace HexletBasics\Logic\LogicalNegation;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        assert(isNotLannisterSoldier('blue', null));
        assert(isNotLannisterSoldier('red', 'man'));
        assert(!isNotLannisterSoldier('red', 'lion'));
        assert(!isNotLannisterSoldier('blue', 'lion'));
        assert(!isNotLannisterSoldier('red', null));
    }
}
