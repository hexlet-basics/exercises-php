<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use function HexletBasics\Asserts\expectOutputString;

$path = __DIR__ . '/index.php';

$expected = "— Did Joffrey agree?\n— He did. He also said \"I love using \\n\".";
require $path;

expectOutputString($expected, function () use ($path) {
    require $path;
});
