<?php

namespace HexletBasics\Conditionals\IfElse;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        $expected1 = 'https://yandex.ru';
        $actual1 = normalizeUrl('yandex.ru');
        $this->assertEquals($expected1, $actual1);

        $expected2 = 'https://yandex.ru';
        $actual2 = normalizeUrl('http://yandex.ru');
        $this->assertEquals($expected2, $actual2);
    }
}
