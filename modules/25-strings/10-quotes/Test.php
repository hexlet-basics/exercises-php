<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use function HexletBasics\Asserts\expectOutputString;

$path = __DIR__ . '/index.php';

$expected = "\\tValar\"\"\n\\n' Morghulis";
require $path;

expectOutputString($expected, function () use ($path) {
    require $path;
});
