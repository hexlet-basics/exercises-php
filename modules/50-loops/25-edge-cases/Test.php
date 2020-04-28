<?php

namespace HexletBasics\Loops\EdgeCases;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $str = 'Sansa Stark';
        assert(!isArgumentsForSubstrCorrect($str, -1, 3));
        assert(!isArgumentsForSubstrCorrect($str, 4, 100));
        assert(!isArgumentsForSubstrCorrect($str, 10, 10));
        assert(!isArgumentsForSubstrCorrect($str, 11, 1));
        assert(!isArgumentsForSubstrCorrect($str, 11, 0));
        assert(isArgumentsForSubstrCorrect($str, 3, 3));
        assert(isArgumentsForSubstrCorrect($str, 10, 1));
    }
}
