<?php

namespace HexletBasics\Tests;

use Webmozart\Assert\Assert;

function test(callable $f)
{
    require_once './index.php';
    $f();
}

function expectOutput($expected, callable $f = null)
{
    ob_start();
    require_once './index.php';
    if ($f) {
        $f();
    }
    $actual = trim(ob_get_contents());
    ob_end_clean();
    if ($actual) {
        print_r($actual);
        print_r("\n\n");
    }

    Assert::eq($actual, $expected);
}
