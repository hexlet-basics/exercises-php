<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use Assert\Assert;

$path = __DIR__ . '/index.php';
require $path;

Assert::that(isPensioner(23))->false();
Assert::that(isPensioner(70))->true();
Assert::that(isPensioner(60))->true();
Assert::that(isPensioner(59))->false();
