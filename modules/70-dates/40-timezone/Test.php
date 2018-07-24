<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use Assert\Assert;

$path = __DIR__ . '/index.php';
require $path;

Assert::that(getYear(1532435204))->eq(2018);
Assert::that(getYear(532435204))->eq(1986);
Assert::that(getYear(5324352))->eq(1970);
