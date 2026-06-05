<?php

namespace HexletBasics\Logic\LogicalOperators;

// BEGIN
function isLeapYear(int $year): bool
{
    return $year % 400 === 0 || ($year % 4 === 0 && $year % 100 !== 0);
}
// END
