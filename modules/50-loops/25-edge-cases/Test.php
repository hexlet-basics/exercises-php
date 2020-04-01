<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\test;

test(function () {
  $str = 'Sansa Stark';
  $result1 = isArgumentsForSubstrCorrect($str, -1, 3); // => false
  Assert::false($result1);
  $result2 = isArgumentsForSubstrCorrect($str, 4, 100); // => false
  Assert::false($result2);
  $result3 = isArgumentsForSubstrCorrect($str, 10, 10); // => false
  Assert::false($result3);
  $result4 = isArgumentsForSubstrCorrect($str, 11, 1); // => false
  Assert::false($result4);
  $result5 = isArgumentsForSubstrCorrect($str, 11, 0); // => false
  Assert::false($result5);
  $result6 = isArgumentsForSubstrCorrect($str, 3, 3); // => true
  Assert::true($result6);
});
