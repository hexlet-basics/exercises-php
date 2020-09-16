<?php

namespace HexletBasics\Loops\EdgeCases;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        $str = 'Sansa Stark';

        $result1 = isArgumentsForSubstrCorrect($str, -1, 3);
        $this->assertIsBool($result1);
        $this->assertFalse($result1);

        $result2 = isArgumentsForSubstrCorrect($str, 4, 100);
        $this->assertIsBool($result2);
        $this->assertFalse($result2);

        $result3 = isArgumentsForSubstrCorrect($str, 10, 10);
        $this->assertIsBool($result3);
        $this->assertFalse($result3);

        $result4 = isArgumentsForSubstrCorrect($str, 11, 1);
        $this->assertIsBool($result4);
        $this->assertFalse($result4);

        $result5 = isArgumentsForSubstrCorrect($str, 11, 0);
        $this->assertIsBool($result5);
        $this->assertFalse($result5);

        $result6 = isArgumentsForSubstrCorrect($str, 3, 3);
        $this->assertIsBool($result6);
        $this->assertTrue($result6);

        $result7 = isArgumentsForSubstrCorrect($str, 10, 1);
        $this->assertIsBool($result7);
        $this->assertTrue($result7);
    }
}
