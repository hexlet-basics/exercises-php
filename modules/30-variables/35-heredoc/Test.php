<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use function HexletBasics\Asserts\expectOutputString;

$path = __DIR__ . '/index.php';

$expected = <<<HERE
  Lannister, Targaryen, Baratheon, Stark, Tyrell... they're all just spokes on a wheel.
  This one's on top, then that one's on top, and on and on it spins, crushing those on the ground.
HERE;

require $path;

expectOutputString($expected, function () use ($path) {
    require $path;
});
