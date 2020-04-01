<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\test;

test(function () {
    Assert::false(isMister('8234782'));
    Assert::false(isMister('Joker'));
    Assert::true(isMister('Mister'));
});
