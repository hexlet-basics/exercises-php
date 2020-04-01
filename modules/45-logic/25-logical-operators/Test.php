<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\test;

test(function () {
  Assert::false(isLannisterSoldier('blue', null));
  Assert::false(isLannisterSoldier('red', 'man'));
  Assert::true(isLannisterSoldier('red', 'lion'));
  Assert::true(isLannisterSoldier('blue', 'lion'));
  Assert::true(isLannisterSoldier('red', null));
});
