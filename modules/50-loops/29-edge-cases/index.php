<?php

namespace HexletBasics\Loops\EdgeCases;

// BEGIN
function isArgumentsForSubstrCorrect($str, $index, $length)
{
    $stringLength = strlen($str);

    if ($index < 0) {
        return false;
    } elseif ($length < 0) {
        return false;
    } elseif ($index >= $stringLength) {
        return false;
    } elseif ($index + $length > $stringLength) {
        return false;
    }

    return true;
}
// END
