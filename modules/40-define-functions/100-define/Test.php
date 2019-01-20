<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use function HexletBasics\Tests\expectOutput;

$expected = 'JAIME: Farewell, my friend...';
expectOutput($expected, function () {
    printJaimesLine('Farewell, my friend...');
});

$expected = 'JAIME: attack!';
expectOutput($expected, function () {
    printJaimesLine('attack!');
});
