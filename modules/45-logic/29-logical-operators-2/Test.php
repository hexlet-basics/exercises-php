<?php

namespace HexletBasics\Logic\LogicalOperators2;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        assert(isNeutralSoldier('yellow', 'black'));
        assert(!isNeutralSoldier('red', 'yellow'));
        assert(!isNeutralSoldier('red', 'red'));
        assert(!isNeutralSoldier('red', 'black'));
        assert(!isNeutralSoldier('yellow', 'red'));
        assert(isNeutralSoldier('black', 'black'));
    }
}
