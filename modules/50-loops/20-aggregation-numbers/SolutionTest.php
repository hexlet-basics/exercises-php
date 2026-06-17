<?php

namespace HexletBasics\Loops\AggregationNumbers;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $this->assertEquals(0, calculateElectricityBill(0));
        $this->assertEquals(400, calculateElectricityBill(80));
        $this->assertEquals(500, calculateElectricityBill(100));
        $this->assertEquals(850, calculateElectricityBill(150));
        $this->assertEquals(1700, calculateElectricityBill(250));
    }
}
