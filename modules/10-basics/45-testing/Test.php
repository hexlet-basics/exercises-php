<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\expectOutput;

$expected = '9780262531962';
expectOutput($expected);
