<?php

namespace HexletBasics\Logic\CombineExpressions;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'Solution.php';
        $this->assertFalse(isInternationalPhone('89602223423'));
        $this->assertTrue(isInternationalPhone('+79602223423'));
    }
}
