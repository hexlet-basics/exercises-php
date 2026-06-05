<?php

namespace HexletBasics\Logic\LogicalExpressions;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'index.php';

        $this->assertTrue(isFalsy(''));
        $this->assertFalse(isFalsy(' '));
        $this->assertTrue(isFalsy(null));
        $this->assertTrue(isFalsy(false));
        $this->assertTrue(isFalsy('0'));
        $this->assertFalse(isFalsy(true));
        $this->assertFalse(isFalsy(3));
        $this->assertFalse(isFalsy('help'));
    }
}
