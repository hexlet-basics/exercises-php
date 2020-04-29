<?php

namespace HexletBasics\Loops\ForLoop;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';
        assert(sumOfSeries(1, 1) === 1);
        assert(sumOfSeries(1, 2) === 3);
        assert(sumOfSeries(7, 9) === 24);
    }
}
