<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\test;

test(function () {
    Assert::eq(getEvenNumbersUpTo(9), "2,4,6,8,");
    Assert::eq(getEvenNumbersUpTo(15), "2,4,6,8,10,12,14,");
    Assert::eq(getEvenNumbersUpTo(2), "2,");
});
