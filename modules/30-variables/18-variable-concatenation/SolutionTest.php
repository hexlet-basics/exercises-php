<?php

namespace HexletBasics\Variables\Concatenation;

use HexletBasics\Exercise\TestCase;

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
    }
}
