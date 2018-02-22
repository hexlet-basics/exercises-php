<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use Assert\Assert;
use Assert\Assertion;

$path = __DIR__ . '/index.php';
require $path;

Assertion::defined('DRAGONS_BORN_COUNT');
Assert::that(DRAGONS_BORN_COUNT)->eq(3);
