<?php

namespace HexletBasics\Loops\LoopAndConditions2;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';
        assert(getEvenNumbersUpTo(9) === "2,4,6,8,");
        assert(getEvenNumbersUpTo(15) === "2,4,6,8,10,12,14,");
        assert(getEvenNumbersUpTo(2) === "2,");
    }
}
