<?php

namespace HexletBasics\AdvancedStrings\MultilineStrings;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = <<<EOT
Dear customer!
Your order has been placed successfully.
Estimated delivery date: 3-5 business days.
Thank you for choosing us!
EOT;
        $this->assertOutput($expected);
    }
}
