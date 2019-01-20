<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\test;

test(function () {
    $expected = 35;
    $actual = getParentNamesTotalLength('Daenerys Targaryen');
    Assert::eq($actual, $expected);
});
