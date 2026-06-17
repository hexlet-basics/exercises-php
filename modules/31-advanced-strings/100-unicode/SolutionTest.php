<?php

namespace HexletBasics\AdvancedStrings\Unicode;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = "13\n7\n";
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
