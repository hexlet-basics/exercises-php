<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use function HexletBasics\Tests\expectOutput;

$expected = "\"Khal Drogo's favorite word is \"athjahakar\"\"";
expectOutput($expected);
