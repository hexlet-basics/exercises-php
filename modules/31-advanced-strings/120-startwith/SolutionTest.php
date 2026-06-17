<?php

namespace HexletBasics\AdvancedStrings\StartWith;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = '18';
        $this->expectOutputString($expected);
        require 'Solution.php';
    }
}
