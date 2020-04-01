<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\test;

test(function () {

    Assert::false(hasTargaryenReference(''));
    Assert::false(hasTargaryenReference('Targari'));
    Assert::false(hasTargaryenReference('targaryen'));
    Assert::true(hasTargaryenReference('Targaryen'));
    Assert::true(hasTargaryenReference('Targaryen Daenerys'));
});
