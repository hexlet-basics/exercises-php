<?php

namespace HexletBasics\Conditionals\Elvis;

// BEGIN
function generateAmount(int $amount, int $price): int
{
    $result = $amount ?: $price * 3;

    return $result;
}
// END
