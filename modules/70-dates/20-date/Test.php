<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use Assert\Assert;

$path = __DIR__ . '/index.php';
require $path;

Assert::that(getCustomDate(1532435204))->eq('24/07/2018');
Assert::that(getCustomDate(532435204))->eq('15/11/1986');
Assert::that(getCustomDate(5324352))->eq('03/03/1970');
