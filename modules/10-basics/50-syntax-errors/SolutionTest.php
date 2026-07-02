<?php

namespace HexletBasics\Basics\SyntaxErrors;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'Программа успешно запущена';
        $this->assertOutput($expected);
    }
}
