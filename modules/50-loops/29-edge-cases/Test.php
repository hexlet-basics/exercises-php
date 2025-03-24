<?php

namespace HexletBasics\Loops\EdgeCases;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        $str = 'Sansa Stark';

        $this->assertFalse(isArgumentsForSubstrCorrect($str, -1, 3),);
        $this->assertFalse(isArgumentsForSubstrCorrect($str, 4, 100),);
        $this->assertFalse(isArgumentsForSubstrCorrect($str, 10, 10),);
        $this->assertFalse(isArgumentsForSubstrCorrect($str, 11, 1),);
        $this->assertFalse(isArgumentsForSubstrCorrect($str, 11, 0),);
        $this->assertTrue(isArgumentsForSubstrCorrect($str, 3, 3));
        $this->assertTrue(isArgumentsForSubstrCorrect($str, 10, 1));
    }
}
