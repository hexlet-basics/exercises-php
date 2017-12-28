<?php

function sumOfRange($start, $finish)
{
    $i = $start;
    $sum = 0;
    for ($i; $i <= $finish; $i++) {
        $sum += $i;
    }

    return $sum;
}
