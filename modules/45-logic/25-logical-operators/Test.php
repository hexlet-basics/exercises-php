<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use Assert\Assert;
use function HexletBasics\Asserts\expectOutputString;

$path = __DIR__ . '/index.php';
require $path;

Assert::that(isLannisterSoldier('blue', null))->false();
Assert::that(isLannisterSoldier('red', 'man'))->false();
Assert::that(isLannisterSoldier('blue', 'lion'))->true();
Assert::that(isLannisterSoldier('red', null))->true();
