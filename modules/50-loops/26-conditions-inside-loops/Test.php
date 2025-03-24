<?php

namespace HexletBasics\Loops\ConditionsInsideLoops;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        $this->assertEquals(1, countChars('axe', 'a'));
        $this->assertEquals(0, countChars('', 'a'));
        $this->assertEquals(2, countChars('OpPa', 'p'));
        $this->assertEquals(2, countChars('OpPa', 'P'));
    }
}
