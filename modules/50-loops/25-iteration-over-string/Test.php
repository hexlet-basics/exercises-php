<?php

namespace HexletBasics\Loops\IterationOverString;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        $str = 'Hexlet';
        $expected = "t\ne\nl\nx\ne\nH\n";
        $this->expectOutputString($expected);
        printReversedWordBySymbol($str);
    }
}
