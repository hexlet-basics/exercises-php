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
        assert($actual1 === $expected1);

        $expected2 = 'https://yandex.ru';
        $actual2 = normalizeUrl('http://yandex.ru');
        assert($actual2 === $expected2);
    }
}
