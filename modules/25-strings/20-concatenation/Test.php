<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use function HexletBasics\Asserts\expectOutputString;

$path = __DIR__ . '/index.php';

$expected = 'Winter came for the House of Frey.';
require $path;

expectOutputString($expected, function () use ($path) {
    require $path;
});
