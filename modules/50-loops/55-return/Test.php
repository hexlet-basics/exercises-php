<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\test;

test(function () {
  Assert::true(doesContain('Renly', 'R'));
  Assert::false(doesContain('Renly', 'r'));
  Assert::true(doesContain('Tommy', 'm'));
  Assert::false(doesContain('Tommy', 'd'));
});
