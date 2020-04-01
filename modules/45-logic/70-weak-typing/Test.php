<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\test;

test(function () {
  Assert::true(isFalsy(''));
  Assert::false(isFalsy(' '));
  Assert::true(isFalsy(null));
  Assert::true(isFalsy(false));
  Assert::false(isFalsy(true));
  Assert::false(isFalsy(3));
});
