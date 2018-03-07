<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use Assert\Assert;
use function HexletBasics\Asserts\expectOutputString;

$path = __DIR__ . '/index.php';
require $path;

Assert::that(isNeutralSoldier('yellow', 'black'))->true();
Assert::that(isNeutralSoldier('red', 'yellow'))->false();
Assert::that(isNeutralSoldier('red', 'red'))->false();
Assert::that(isNeutralSoldier('black', 'black'))->true();
