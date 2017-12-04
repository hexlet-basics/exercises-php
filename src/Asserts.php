<?php

namespace HexletBasics\Asserts;

use Assert\Assert;

function expectOutputString($expected, $f)
{
    ob_start();
    $f();
    $actual = ob_get_contents();
    ob_end_clean();
    /* Assertion::same($actual, $expected); */
    Assert::that($actual)->contains($expected);
}
