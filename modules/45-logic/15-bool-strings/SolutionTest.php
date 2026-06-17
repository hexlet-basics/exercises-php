<?php

namespace HexletBasics\Logic\BoolStrings;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $this->assertFalse(isLongWord('apple'));
        $this->assertTrue(isLongWord('banana'));
        $this->assertTrue(isLongWord('pineapple'));
    }
}
