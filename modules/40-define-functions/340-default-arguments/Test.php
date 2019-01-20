<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\test;

test(function () {
    $expected = 'Tywin Lannister';
    $actual = customParentFor('Cersei Lannister');
    print_r($actual);
    Assert::eq($actual, $expected);
});
