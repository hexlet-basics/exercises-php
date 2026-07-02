<?php

namespace HexletBasics\Variables\MagicNumbers;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = "Ящиков на складе:\n102";
        $this->assertOutput($expected);
    }
}
