<?php

namespace HexletBasics\AdvancedStrings\Interpolation;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'Здравствуйте, Анна! Ваш заказ #1337 принят.';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
