<?php

namespace HexletBasics\Loops\LoopAndConditions;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $str1 = 'A';
        $str2 = 'HELLO';
        $str3 = 'HELLO!';

        $shoutStr1 = 'A';
        $shoutStr2 = 'HELLOHELLOHELLOHELLOHELLOHELLOHELLOHELLOHELLOHELLO';
        $shoutStr3 = str_repeat('HELLO!', 100);


        assert(shouter($str1) === $shoutStr1);
        assert(shouter($str2) === $shoutStr2);
        assert(shouter($str3) === $shoutStr3);
    }
}
