<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\test;

test(function () {
    Assert::eq(getYear(1532435204), 2018);
    Assert::eq(getYear(532435204), 1986);
    Assert::eq(getYear(5324352), 1970);
});
