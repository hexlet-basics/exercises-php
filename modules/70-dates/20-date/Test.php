<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\test;

test(function () {
    Assert::eq(getCustomDate(1532435204), '24/07/2018');
    Assert::eq(getCustomDate(532435204), '15/11/1986');
    Assert::eq(getCustomDate(5324352), '03/03/1970');
});
