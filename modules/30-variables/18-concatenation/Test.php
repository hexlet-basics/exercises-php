<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use function HexletBasics\Asserts\expectOutputString;

$path = __DIR__ . '/index.php';

$expected = <<<HERE
Hello, Joffrey!
Here is important information about your account security.
We couldn't verify you mother's maiden name.
HERE;

require $path;

expectOutputString($expected, function () use ($path) {
    require $path;
});
