<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\test;

test(function () {
    Assert::eq(getAge(10), 10);
    Assert::eq(getAge(9.1), 9);
    Assert::eq(getAge(8.9), 9);
    Assert::eq(getAge(8.5), 8);
});
