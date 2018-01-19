<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use function HexletBasics\Asserts\expectOutputString;

$path = __DIR__ . '/index.php';

$expected = "Hello, Joffrey!\nHere is important information about your account security.\nWe couldn't verify you mother's maiden name.";
require $path;

expectOutputString($expected, function () use ($path) {
    require $path;
});
