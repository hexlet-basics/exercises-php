<?php

namespace HexletBasics\Variables\Concatenation;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = <<<HERE
Здравствуйте, Анна!
Спасибо за ваш заказ.
Ожидаемая дата доставки — 3 рабочих дня.
HERE;

        $this->expectOutputString($expected);
        require 'Solution.php';
    }
}
