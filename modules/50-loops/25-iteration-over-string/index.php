<?php

namespace HexletBasics\Loops\IterationOverString;

// BEGIN
function printReversedWordBySymbol($word)
{
    $i = strlen($word) - 1;
    while ($i >= 0) {
        print_r("$word[$i]\n");
        $i = $i - 1;
    }
}
// END
