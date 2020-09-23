<?php

namespace HexletBasics\Loops\AgregationNumber;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        assert(multiplyNumberFromRange(2, 2) === 2);
        assert(multiplyNumberFromRange(1, 3) === 6);
        assert(multiplyNumberFromRange(1, 5) === 120);
    }
}
