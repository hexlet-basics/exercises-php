<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use Assert\Assert;

$path = __DIR__ . '/index.php';
require $path;

Assert::that(isNotLannisterSoldier('blue', null))->true();
Assert::that(isNotLannisterSoldier('red', 'man'))->true();
Assert::that(isNotLannisterSoldier('blue', 'lion'))->false();
Assert::that(isNotLannisterSoldier('red', null))->false();
