<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use Assert\Assert;

$path = __DIR__ . '/index.php';
require $path;

Assert::that(isFalsy(''))->true();
Assert::that(isFalsy(' '))->false();
Assert::that(isFalsy(null))->true();
Assert::that(isFalsy(false))->true();
Assert::that(isFalsy(true))->false();
Assert::that(isFalsy(3))->false();