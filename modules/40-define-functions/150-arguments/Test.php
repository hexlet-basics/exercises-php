<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use function HexletBasics\Tests\expectOutput;

$expected = '0-0-0-0-0-';
expectOutput($expected, function () {
    printSeq('0-', 5);
});
