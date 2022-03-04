<?php

namespace HexletBasics\Logic\LogicalOperators;

// BEGIN
function isLeapYear($year)
{
    $result = $year % 400 === 0 || ($year % 4 === 0 && $year % 100 !== 0);

    return $result;
}
// END
