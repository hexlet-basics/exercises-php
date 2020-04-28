<?php

namespace HexletBasics\Logic\LogicalOperators2;

// BEGIN
function isNeutralSoldier($color, $shield)
{
    return ($color !== 'red' && $shield === 'black');
}
// END
