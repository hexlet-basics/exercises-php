<?php

namespace HexletBasics\Logic\BoolType;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $this->assertFalse(isPensioner(23));
        $this->assertFalse(isPensioner(59));
        $this->assertTrue(isPensioner(60));
        $this->assertTrue(isPensioner(70));
    }
}
