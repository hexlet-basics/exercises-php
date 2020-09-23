<?php

namespace HexletBasics\Loops\IterationOverString;

// BEGIN
function printReversedNameBySymbol($name)
{
    $i = strlen($name) - 1;
    while ($i >= 0) {
        print_r($name[$i]);
        $i = $i - 1;
    }
}
// END
