<?php

namespace HexletBasics\Logic\LogicalOperators;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        $this->assertTrue(isLeapYear(2016));
        $this->assertTrue(isLeapYear(2000));
        $this->assertFalse(isLeapYear(2017));
        $this->assertFalse(isLeapYear(2018));
        $this->assertFalse(isLeapYear(1900));
    }
}
