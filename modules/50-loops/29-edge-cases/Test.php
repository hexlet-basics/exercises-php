<?php

namespace HexletBasics\Loops\EdgeCases;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        $str = 'Sansa Stark';

        assert(isArgumentsForSubstrCorrect($str, -1, 3) === false);
        assert(isArgumentsForSubstrCorrect($str, 4, 100) === false);
        assert(isArgumentsForSubstrCorrect($str, 10, 10) === false);
        assert(isArgumentsForSubstrCorrect($str, 11, 1) === false);
        assert(isArgumentsForSubstrCorrect($str, 11, 0) === false);
        assert(isArgumentsForSubstrCorrect($str, 3, 3) === true);
        assert(isArgumentsForSubstrCorrect($str, 10, 1) === true);
    }
}
