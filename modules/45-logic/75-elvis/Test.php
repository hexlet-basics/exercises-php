<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use Assert\Assert;

$path = __DIR__ . '/index.php';
require $path;

Assert::that(generateAmount(0, 2))->eq(6);
Assert::that(generateAmount(0, 5))->eq(15);
Assert::that(generateAmount(1, 2))->eq(1);
Assert::that(generateAmount(15, 16))->eq(15);
