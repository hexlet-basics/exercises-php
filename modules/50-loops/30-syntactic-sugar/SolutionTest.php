<?php

namespace HexletBasics\Loops\SyntacticSugar;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'index.php';

        $this->assertEquals('-----', buildProgressBar(0, 5));
        $this->assertEquals('###--', buildProgressBar(3, 5));
        $this->assertEquals('#####', buildProgressBar(5, 5));
    }
}
