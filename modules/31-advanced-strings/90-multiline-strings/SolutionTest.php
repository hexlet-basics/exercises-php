<?php

namespace HexletBasics\AdvancedStrings\MultilineStrings;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = <<<EOT
Уважаемый пользователь!
Ваш заказ успешно оформлен.
Ожидаемая дата доставки: 3-5 рабочих дней.
Спасибо, что выбрали нас!
EOT;
        $this->assertOutput($expected);
    }
}
