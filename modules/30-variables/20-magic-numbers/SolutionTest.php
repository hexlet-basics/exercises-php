<?php

namespace HexletBasics\Variables\MagicNumbers;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = "Boxes in stock:\n102";
        $this->assertOutput($expected);
    }
}
