<?php

namespace HexletBasics\Loops\AgregationNumber;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        assert(multiplyNumbersFromRange(2, 2) === 2);
        assert(multiplyNumbersFromRange(1, 3) === 6);
        assert(multiplyNumbersFromRange(1, 5) === 120);
    }
}
