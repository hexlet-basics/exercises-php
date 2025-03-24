<?php

namespace HexletBasics\Loops\AgregationString;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        $this->assertEquals('2', joinNumbersFromRange(2, 2));
        $this->assertEquals('12345', joinNumbersFromRange(1, 5));
        $this->assertEquals('101112', joinNumbersFromRange(10, 12));
    }
}
