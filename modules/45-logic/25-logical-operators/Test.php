<?php

namespace HexletBasics\Logic\LogicalOperators;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        assert(isLeapYear(2016));
        assert(isLeapYear(2000));
        assert(!isLeapYear(2017));
        assert(!isLeapYear(2018));
        assert(!isLeapYear(1900));
    }
}
