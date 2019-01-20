<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use function HexletBasics\Tests\expectOutput;

$expected = 'Winter came for the House of Frey.';
expectOutput($expected);
