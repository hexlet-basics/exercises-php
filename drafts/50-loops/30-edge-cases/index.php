<?php

function isArgumentsForSubstrCorrect($str, $index, $length)
{
    if ($index < 0) {
        return false;
    }
    if ($index + $length > strlen($str)) {
        return false;
    }

    return true;
}
