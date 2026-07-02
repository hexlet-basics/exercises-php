<?php

namespace HexletBasics\Strings\Quotes;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'The file "user\'s_config.json" was not found.';
        $this->assertOutput($expected);
    }
}
