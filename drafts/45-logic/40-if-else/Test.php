<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use Assert\Assert;

$path = __DIR__ . '/index.php';
require $path;

Assert::that(normalizeUrl('yandex.ru'))->eq('https://yandex.ru');
Assert::that(normalizeUrl('https://yandex.ru'))->eq('https://yandex.ru');
