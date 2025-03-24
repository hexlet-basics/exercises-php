<?php

namespace HexletBasics\Logic\LogicalOperators2;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        $this->assertTrue(isNeutralSoldier('yellow', 'black'));
        $this->assertFalse(isNeutralSoldier('red', 'yellow'));
        $this->assertFalse(isNeutralSoldier('red', 'red'));
        $this->assertFalse(isNeutralSoldier('red', 'black'));
        $this->assertFalse(isNeutralSoldier('yellow', 'red'));
        $this->assertTrue(isNeutralSoldier('black', 'black'));
    }
}
