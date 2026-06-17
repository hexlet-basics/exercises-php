<?php

namespace HexletBasics\Loops\SyntacticSugar;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $this->assertEquals('-----', buildProgressBar(0, 5));
        $this->assertEquals('###--', buildProgressBar(3, 5));
        $this->assertEquals('#####', buildProgressBar(5, 5));
    }
}
