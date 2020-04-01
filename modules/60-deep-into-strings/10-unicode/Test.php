<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\test;

test(function () {
    Assert::eq(invertCase('one'), 'ONE');
    Assert::eq(invertCase('TWO'), 'two');
    Assert::eq(invertCase('ThRee'), 'tHrEE');
    Assert::eq(invertCase('ПрИвЕт!'), 'пРиВеТ!');
});
