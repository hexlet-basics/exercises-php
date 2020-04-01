<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\test;

test(function () {
    Assert::true(isNotLannisterSoldier('blue', null));
    Assert::true(isNotLannisterSoldier('red', 'man'));
    Assert::false(isNotLannisterSoldier('red', 'lion'));
    Assert::false(isNotLannisterSoldier('blue', 'lion'));
    Assert::false(isNotLannisterSoldier('red', null));
});
