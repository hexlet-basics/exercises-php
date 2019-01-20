<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use function HexletBasics\Tests\expectOutput;

$expected = '2432';
expectOutput($expected);
