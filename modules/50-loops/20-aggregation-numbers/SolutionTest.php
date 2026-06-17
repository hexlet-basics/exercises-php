<?php

namespace HexletBasics\Loops\AggregationNumbers;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'Solution.php';

        $this->assertEquals(0, calculateElectricityBill(0));
        $this->assertEquals(400, calculateElectricityBill(80));
        $this->assertEquals(500, calculateElectricityBill(100));
        $this->assertEquals(850, calculateElectricityBill(150));
        $this->assertEquals(1700, calculateElectricityBill(250));
    }
}
