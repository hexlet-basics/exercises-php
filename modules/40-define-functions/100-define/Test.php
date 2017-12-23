<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use function HexletBasics\Asserts\expectOutputString;

$path = __DIR__ . '/index.php';
require $path;

$expected = 'phhh';
dracarys();

expectOutputString($expected, function () use ($path) {
    dracarys();
});
