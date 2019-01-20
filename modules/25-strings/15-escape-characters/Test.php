<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use function HexletBasics\Tests\expectOutput;

$expected = "- Did Joffrey agree?\n- He did. He also said \"I love using \\n\".";
expectOutput($expected);
