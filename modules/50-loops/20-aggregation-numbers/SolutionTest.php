<?php

namespace HexletBasics\Loops\AgregationNumber;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'index.php';

        $this->assertEquals(2, multiplyNumbersFromRange(2, 2));
        $this->assertEquals(6, multiplyNumbersFromRange(1, 3));
        $this->assertEquals(120, multiplyNumbersFromRange(1, 5));
    }
}
