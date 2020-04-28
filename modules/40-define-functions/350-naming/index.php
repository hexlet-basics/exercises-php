<?php

namespace HexletBasics\DefineFunctions\Naming;

// BEGIN
function getFormattedBirthday($day, $month, $year)
{
    return sprintf('%02d-%02d-%d', $day, $month, $year);
}
// END
