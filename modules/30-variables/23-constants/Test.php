<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use Webmozart\Assert\Assert;

$path = __DIR__ . '/index.php';
require $path;

Assert::eq(DRAGONS_BORN_COUNT, 3);
