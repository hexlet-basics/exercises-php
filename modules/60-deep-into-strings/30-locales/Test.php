<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use function HexletBasics\Asserts\expectOutputString;

$path = __DIR__ . '/index.php';

$expected = setlocale(LC_CTYPE, 0);

expectOutputString($expected, function () use ($path) {
    require $path;
});
