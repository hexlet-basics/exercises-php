<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use Assert\Assert;

$path = __DIR__ . '/index.php';
require $path;

Assert::that(hasTargaryenReference(''))->false();
Assert::that(hasTargaryenReference('Targari'))->false();
Assert::that(hasTargaryenReference('targaryen'))->false();
Assert::that(hasTargaryenReference('Targaryen'))->true();
Assert::that(hasTargaryenReference('Targaryen Daenerys'))->true();
