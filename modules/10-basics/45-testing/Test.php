<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use function HexletBasics\Asserts\expectOutputString;

$path = __DIR__ . '/index.php';

$expected = "9780262531962";
print_r("Expected value: {$expected}\n  Actual value: ");
require $path;

expectOutputString($expected, function () use ($path) {
    require $path;
});
