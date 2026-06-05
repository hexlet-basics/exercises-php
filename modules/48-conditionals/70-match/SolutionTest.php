<?php

namespace HexletBasics\Conditionals\MatchExpression;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'index.php';

        $this->assertEquals(600, calculateDeliveryCost('canada', 0.5));
        $this->assertEquals(600, calculateDeliveryCost('canada', 1));
        $this->assertEquals(900, calculateDeliveryCost('canada', 2));
        $this->assertEquals(800, calculateDeliveryCost('usa', 1));
        $this->assertEquals(1200, calculateDeliveryCost('usa', 3));
        $this->assertEquals(700, calculateDeliveryCost('germany', 0.3));
        $this->assertEquals(1000, calculateDeliveryCost('germany', 1.5));
        $this->assertNull(calculateDeliveryCost('france', 1));
    }
}
