<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use Assert\Assert;

$path = __DIR__ . '/index.php';
require $path;

Assert::that(invertCase('one'))->eq('ONE');
Assert::that(invertCase('TWO'))->eq('two');
Assert::that(invertCase('ThRee'))->eq('tHrEE');
Assert::that(invertCase('ПрИвЕт!'))->eq('пРиВеТ!');
