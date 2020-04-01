<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\test;

test(function () {
  $str = 'If I look back I am lost';
  $result1 = filterString($str, 'I');
  Assert::eq($result1, 'f  look back  am lost');
  $result2 = filterString($str, 'o');
  Assert::eq($result2, 'If I lk back I am lst');
});
