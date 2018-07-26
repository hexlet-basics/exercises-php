<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use function HexletBasics\Asserts\expectOutputString;

$path = __DIR__ . '/index.php';

$expected = 'UTC';
require $path;

expectOutputString($expected, function () use ($path) {
    require $path;
});
