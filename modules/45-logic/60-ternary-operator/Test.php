<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use Assert\Assert;

$path = __DIR__ . '/index.php';
require $path;

Assert::that(convertString('hey'))->eq('yeh');
Assert::that(convertString('Hey'))->eq('Hey');
