<?php

namespace HexletBasics\Logic\LogicalOperators;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        assert(!isLannisterSoldier('blue', null));
        assert(!isLannisterSoldier('red', 'man'));
        assert(isLannisterSoldier('red', 'lion'));
        assert(isLannisterSoldier('blue', 'lion'));
        assert(isLannisterSoldier('red', null));
    }
}
