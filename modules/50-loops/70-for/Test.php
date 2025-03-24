<?php

namespace HexletBasics\Loops\ForLoop;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        $this->assertEquals(1, sumOfSeries(1, 1));
        $this->assertEquals(3, sumOfSeries(1, 2));
        $this->assertEquals(24, sumOfSeries(7, 9));
    }
}
