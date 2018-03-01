<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use Assert\Assert;

$path = __DIR__ . '/index.php';
require $path;

Assert::that(isMister('8234782'))->false();
Assert::that(isMister('Joker'))->false();
Assert::that(isMister('Mister'))->true();
