<?php

namespace HexletBasics;

use Assert\Assert;

require __DIR__ . '/../../../vendor/autoload.php';

$path = __DIR__ . '/index.php';
require $path;

$expected = 'Taiwan Lannister';
$actual = customParentFor('Cersei Lannister');
Assert::that($actual)->contains($expected);
