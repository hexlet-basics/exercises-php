<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use Assert\Assert;
use function HexletBasics\Asserts\expectOutputString;

$path = __DIR__ . '/index.php';
require $path;

$actual = getLastChar('how?');

Assert::that($actual)->eq('?');

$actual = getLastChar('Bob');

Assert::that($actual)->eq('b');
