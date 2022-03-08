<?php

namespace HexletBasics\Loops\SyntaxSugar;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        $text = 'If I look back I am lost';
        $result1 = filterString($text, 'I');
        assert($result1 === 'f  look back  am lost');
        $result2 = filterString('zz zorro', 'z');
        assert($result2 === ' orro');
    }
}
