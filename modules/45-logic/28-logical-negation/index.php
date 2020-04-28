<?php

namespace HexletBasics\Logic\LogicalNegation;

use function HexletBasics\Functions\isLannisterSoldier;

// BEGIN
function isNotLannisterSoldier($color, $shield)
{
    return !isLannisterSoldier($color, $shield);
}
// END
