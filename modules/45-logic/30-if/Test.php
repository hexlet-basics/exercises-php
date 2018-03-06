<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use Assert\Assert;

$path = __DIR__ . '/index.php';
require $path;

Assert::that(getSentenceTone('normal'))->eq('normal');
Assert::that(getSentenceTone('normal?'))->eq('normal');
Assert::that(getSentenceTone('NoRmal?'))->eq('normal');
Assert::that(getSentenceTone('SCREAM'))->eq('scream');
Assert::that(getSentenceTone('SCREAM!'))->eq('scream');
