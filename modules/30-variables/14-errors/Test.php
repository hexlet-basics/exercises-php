<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use function HexletBasics\Tests\expectOutput;

$expected = 'Targaryen and Dragon';
expectOutput($expected);
