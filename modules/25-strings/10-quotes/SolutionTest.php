<?php

namespace HexletBasics\Strings\Quotes;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'The file "user\'s_config.json" was not found.';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
