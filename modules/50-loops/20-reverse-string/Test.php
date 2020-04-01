<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\test;

test(function () {
    Assert::eq(mysubstr('got', 3), 'got');
    Assert::eq(mysubstr('got', 2), 'go');
    Assert::eq(mysubstr('got', 1), 'g');
});
