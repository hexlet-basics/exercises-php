<?php

namespace HexletBasics\Logic\BoolStrings;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'Solution.php';

        $this->assertFalse(isLongWord('apple'));
        $this->assertTrue(isLongWord('banana'));
        $this->assertTrue(isLongWord('pineapple'));
    }
}
