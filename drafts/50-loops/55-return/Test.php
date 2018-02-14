<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use Assert\Assert;

$path = __DIR__ . '/index.php';
require $path;

Assert::that(isContain('Renly', 'R'))->true();
Assert::that(isContain('Renly', 'r'))->false();
Assert::that(isContain('Tommy', 'm'))->true();
Assert::that(isContain('Tommy', 'd'))->false();
