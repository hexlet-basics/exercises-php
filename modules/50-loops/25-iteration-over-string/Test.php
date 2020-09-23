<?php

namespace HexletBasics\Loops\IterationOverString;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        $str = 'Hexlet';
        $expected = 'telxeH';
        $this->expectOutputString($expected);
        printReversedNameBySymbol($str);
    }
}
