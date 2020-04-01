<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\test;

test(function () {
  Assert::eq(sumOfSeries(1, 1), 1);
  Assert::eq(sumOfSeries(1, 2), 3);
  Assert::eq(sumOfSeries(7, 9), 24);
});
