<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\test;

test(function () {
  Assert::eq(convertString('hey'), 'yeh');
  Assert::eq(convertString('Hey'), 'Hey');
});
