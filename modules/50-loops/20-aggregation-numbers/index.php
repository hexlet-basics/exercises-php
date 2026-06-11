<?php

namespace HexletBasics\Loops\AggregationNumbers;

// BEGIN
function calculateElectricityBill(int $kwh): int
{
    $total = 0;
    $current = 1;

    while ($current <= $kwh) {
        if ($current <= 100) {
            $total = $total + 5;
        } elseif ($current <= 200) {
            $total = $total + 7;
        } else {
            $total = $total + 10;
        }
        $current = $current + 1;
    }

    return $total;
}
// END
