<?php

namespace HexletBasics\Strings\Concatenation;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'https://github.com/hexlet/exercises-php';
        $this->expectOutputString($expected);
        require 'Solution.php';
    }
}
