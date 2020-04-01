<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\test;

test(function () {
    Assert::true(startsWith('one', 'o'));
    Assert::false(startsWith('one', 'ne'));
    Assert::true(startsWith('one', 'on'));
    Assert::true(startsWith('one', 'one'));
});
