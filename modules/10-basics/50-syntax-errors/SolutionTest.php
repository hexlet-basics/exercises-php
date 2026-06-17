<?php

namespace HexletBasics\Basics\SyntaxErrors;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'Программа успешно запущена';
        $this->expectOutputString($expected);
        require 'Solution.php';
    }
}
