<?php

namespace HexletBasics\Loops\AgregationString;

// BEGIN
function joinNumbersFromRange(int $start, int $end): string
{
    $i = $start;
    $result = '';

    while ($i <= $end) {
        $result = "{$result}{$i}";
        $i = $i + 1;
    }

    return $result;
}
// END
