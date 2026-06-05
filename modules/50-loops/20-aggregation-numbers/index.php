<?php

namespace HexletBasics\Loops\AgregationNumber;

// BEGIN
function multiplyNumbersFromRange(int $start, int $finish): int
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
