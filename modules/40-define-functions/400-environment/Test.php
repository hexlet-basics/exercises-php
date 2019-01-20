<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\test;

test(function () {
    $expected = 'The age difference is 17';
    $actual = getAgeDifference(2001, 2018);
    print_r($actual);
    Assert::eq($actual, $expected);
});
