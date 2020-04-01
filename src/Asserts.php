<?php

namespace HexletBasics\Asserts;

use Webmozart\Assert\Assert;

function expectOutputString($expected, $f)
{
    ob_start();
    $f();
    $actual = ob_get_contents();
    ob_end_clean();
    Assert::eq($actual, $expected);
}
