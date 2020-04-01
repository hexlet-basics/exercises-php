<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\test;

test(function () {
  Assert::eq(getNumberExplanation(0), null);
  Assert::eq(getNumberExplanation(666), 'devil number');
  Assert::eq(getNumberExplanation(42), 'answer for everything');
  Assert::eq(getNumberExplanation(7), 'prime number');
});
