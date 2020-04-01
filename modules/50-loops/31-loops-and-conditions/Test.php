<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\test;

test(function () {
    $str1 = 'A';
    $str2 = 'HELLO';
    $str3 = 'HELLO!';

    $shoutStr1 = 'A';
    $shoutStr2 = 'HELLOHELLOHELLOHELLOHELLOHELLOHELLOHELLOHELLOHELLO';
    $shoutStr3 = str_repeat('HELLO!', 100);


    Assert::eq(shouter($str1), $shoutStr1);
    Assert::eq(shouter($str2), $shoutStr2);
    Assert::eq(shouter($str3), $shoutStr3);
});
