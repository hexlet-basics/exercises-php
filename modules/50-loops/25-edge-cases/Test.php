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
        assert(!$result1);

        $result2 = isArgumentsForSubstrCorrect($str, 4, 100);
        $this->assertIsBool($result2);
        assert(!$result2);

        $result3 = isArgumentsForSubstrCorrect($str, 10, 10);
        $this->assertIsBool($result3);
        assert(!$result3);

        $result4 = isArgumentsForSubstrCorrect($str, 11, 1);
        $this->assertIsBool($result4);
        assert(!$result4);

        $result5 = isArgumentsForSubstrCorrect($str, 11, 0);
        $this->assertIsBool($result5);
        assert(!$result5);

        $result6 = isArgumentsForSubstrCorrect($str, 3, 3);
        $this->assertIsBool($result6);
        assert($result6);

        $result7 = isArgumentsForSubstrCorrect($str, 10, 1);
        $this->assertIsBool($result7);
        assert($result7);
    }
}
