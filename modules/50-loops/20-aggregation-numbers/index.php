<?php

namespace HexletBasics\Loops\AgregationNumber;

// BEGIN
function multiplyNumbersFromRange($start, $finish)
{
    $i = $start;
    $result = 1;

    while ($i <= $finish) {
        $result = $result * $i;
        $i = $i + 1;
    }

    return $result;
}
// END
