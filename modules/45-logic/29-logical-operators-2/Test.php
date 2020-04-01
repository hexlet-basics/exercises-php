<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\test;

test(function () {
  Assert::true(isNeutralSoldier('yellow', 'black'));
  Assert::false(isNeutralSoldier('red', 'yellow'));
  Assert::false(isNeutralSoldier('red', 'red'));
  Assert::true(isNeutralSoldier('black', 'black'));
});
