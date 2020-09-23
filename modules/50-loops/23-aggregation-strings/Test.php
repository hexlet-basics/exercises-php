<?php

namespace HexletBasics\Loops\AgregationString;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        assert(joinNumbersFromRange(2, 2) === '2');
        assert(joinNumbersFromRange(1, 5) === '12345');
        assert(joinNumbersFromRange(10, 12) === '101112');
    }
}
