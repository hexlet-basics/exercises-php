<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use Assert\Assert;

$path = __DIR__ . '/index.php';
require $path;

Assert::that(startsWith('one', 'o'))->true();
Assert::that(startsWith('one', 'ne'))->false();
Assert::that(startsWith('one', 'on'))->true();
Assert::that(startsWith('one', 'one'))->true();
