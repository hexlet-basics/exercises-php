<?php

namespace HexletBasics\Loops\ConditionsInsideLoops;

// BEGIN
function countChars($str, $char)
{
    $i = 0;
    $count = 0;
    while ($i < strlen($str)) {
        if (strtoupper($str[$i]) === strtoupper($char)) {
            $count = $count + 1;
        }
        $i = $i + 1;
    }

    return $count;
}
// END
