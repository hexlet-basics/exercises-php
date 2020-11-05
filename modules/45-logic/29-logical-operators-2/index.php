<?php

namespace HexletBasics\Logic\LogicalOperators2;

// BEGIN
function isNeutralSoldier($armorColor, $shieldColor)
{
    return ($armorColor !== 'red' && $shieldColor === 'black');
}
// END
