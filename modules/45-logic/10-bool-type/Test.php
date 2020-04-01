<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\test;

test(function () {
  Assert::false(isPensioner(23));
  Assert::true(isPensioner(70));
  Assert::true(isPensioner(60));
  Assert::false(isPensioner(59));
});
