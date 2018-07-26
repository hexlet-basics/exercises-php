<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use Assert\Assert;

Assert::that(sprintf('%f', 1.234))->eq('1.234');

$path = __DIR__ . '/index.php';
require $path;

Assert::that(sprintf('%f', 1.234))->eq('1,234000');
