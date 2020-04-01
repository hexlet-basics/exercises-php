<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\test;

test(function () {
    Assert::eq(getSentenceTone('normal'), 'normal');
    Assert::eq(getSentenceTone('normal?'), 'normal');
    Assert::eq(getSentenceTone('NoRmal?'), 'normal');
    Assert::eq(getSentenceTone('SCREAM'), 'scream');
    Assert::eq(getSentenceTone('SCREAM!'), 'scream');
});
