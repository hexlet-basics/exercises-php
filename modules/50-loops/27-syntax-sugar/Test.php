<?php

namespace HexletBasics\Loops\SyntaxSugar;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $str = 'If I look back I am lost';
        $result1 = countChars($str, 'I');
        assert($result1 === 3);
        $result2 = countChars($str, 'z');
        assert($result2 === 0);
        $result3 = countChars($str, 'o');
        assert($result3 === 3);
    }
}
