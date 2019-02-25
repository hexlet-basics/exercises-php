<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use function HexletBasics\Tests\expectOutput;

$expected = "-98.9";
expectOutput($expected);
