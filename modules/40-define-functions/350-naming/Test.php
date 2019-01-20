<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\test;

test(function () {
    $expected = '01-01-2001';
    $actual = getFormattedBirthday(1, 1, 2001);
    print_r($actual);
    Assert::eq($actual, $expected);
});
