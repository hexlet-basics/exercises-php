<?php

// BEGIN
function isArgumentsForSubstrCorrect($str, $index, $length)
{
    $lastIndex = strlen($str) - 1;

    if ($index < 0) {
        return false;
    } elseif ($length < 0) {
        return false;
    } elseif ($index > $lastIndex) {
        return false;
    } elseif ($index + $length > $lastIndex) {
        return false;
    }

    return true;
}
// END
