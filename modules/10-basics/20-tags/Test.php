<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\expectOutput;

$expected = 'King in the North!';
expectOutput($expected);
