<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\test;

test(function () {
  Assert::eq(generateAmount(0, 2), 6);
  Assert::eq(generateAmount(0, 5), 15);
  Assert::eq(generateAmount(1, 2), 1);
  Assert::eq(generateAmount(15, 16), 15);
});
