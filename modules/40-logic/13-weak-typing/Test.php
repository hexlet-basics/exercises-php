<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use Assert\Assert;

$path = __DIR__ . '/index.php';
require $path;

Assert::that(isOld(23))->false();
Assert::that(isOld(70))->true();
Assert::that(isOld(60))->true();
Assert::that(isOld(59))->false();
