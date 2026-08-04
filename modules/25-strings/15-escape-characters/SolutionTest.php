<?php

namespace HexletBasics\Strings\EscapeCharacters;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = "Use \"\\n\" to separate lines\nExample: print_r(\"line1\\nline2\")";
        $this->assertOutput($expected);
    }
}
