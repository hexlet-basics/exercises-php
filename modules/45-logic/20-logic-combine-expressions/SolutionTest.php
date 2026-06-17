<?php

namespace HexletBasics\Logic\CombineExpressions;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $this->assertFalse(isInternationalPhone('89602223423'));
        $this->assertTrue(isInternationalPhone('+79602223423'));
    }
}
