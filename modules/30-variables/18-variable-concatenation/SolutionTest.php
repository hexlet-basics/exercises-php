<?php

namespace HexletBasics\Variables\Concatenation;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = <<<HERE
Hello, Anna!
Thank you for your order.
Estimated delivery date — 3 business days.
HERE;

        $this->assertOutput($expected);
    }
}
