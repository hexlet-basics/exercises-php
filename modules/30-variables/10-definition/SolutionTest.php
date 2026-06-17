<?php

namespace HexletBasics\Variables\Definition;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = "https://hexlet.io\nhttps://hexlet.io";
        $this->expectOutputString($expected);
        require 'Solution.php';
    }
}
