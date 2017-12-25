<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use Assert\Assert;

$path = __DIR__ . '/index.php';
require $path;

Assert::that(isZero(23))->false();
Assert::that(isZero(-1))->false();
Assert::that(isZero(0))->true();
