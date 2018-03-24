<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use Assert\Assert;

$path = __DIR__ . '/index.php';
require $path;

Assert::that(sumOfRange(1, 1))->eq(1);
Assert::that(sumOfRange(1, 2))->eq(3);
Assert::that(sumOfRange(7, 9))->eq(24);
