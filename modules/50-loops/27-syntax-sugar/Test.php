<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\test;

test(function () {
  $str = 'If I look back I am lost';
  $result1 = countChars($str, 'I');
  Assert::eq($result1, 3);
  $result2 = countChars($str, 'z');
  Assert::eq($result2, 0);
  $result3 = countChars($str, 'o');
  Assert::eq($result3, 3);
});
