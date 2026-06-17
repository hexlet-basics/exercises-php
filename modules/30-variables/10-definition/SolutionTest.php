<?php

namespace HexletBasics\Variables\Definition;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = "https://hexlet.io\nhttps://hexlet.io";
        $this->expectOutputString($expected);
    }
}
