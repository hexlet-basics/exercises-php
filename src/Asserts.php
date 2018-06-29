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
    /* try { */
    Assert::that($actual)->same($expected);
    /* } catch (Exception $e) { */
    /*     print_r($e->getMessage()); */
    /* } */
}
