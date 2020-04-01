<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\test;

test(function () {
    $expected1 = 'https://yandex.ru';
    $actual1 = normalizeUrl('yandex.ru');
    dump($actual1);
    Assert::eq($actual1, $expected1);

    $expected2 = 'https://yandex.ru';
    $actual2 = normalizeUrl('http://yandex.ru');
    dump($actual2);
    Assert::eq($actual2, $expected2);
});
