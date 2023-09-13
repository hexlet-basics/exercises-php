<?php

namespace HexletBasics\Loops\ForLoop;

// BEGIN
function sumOfSeries($start, $finish)
{
    /*
    * Note: we create a new variable here,
    * rather than use the argument as a counter.
    * Counter will be changing as the function works,
    * and changing arguments is considered harmful.
    */

    $sum = 0;
    for ($i = $start; $i <= $finish; $i++) {
        $sum += $i;
    }

    return $sum;
}
// END
