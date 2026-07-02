<?php

namespace HexletBasics\AdvancedStrings\Interpolation;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'Здравствуйте, Анна! Ваш заказ #1337 принят.';
        $this->assertOutput($expected);
    }
}
