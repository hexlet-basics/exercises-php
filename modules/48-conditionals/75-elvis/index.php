<?php

namespace HexletBasics\Conditionals\Elvis;

// BEGIN
function generateAmount($amount, $price)
{
    $result = $amount ?: $price * 3;

    return $result;
}
// END
