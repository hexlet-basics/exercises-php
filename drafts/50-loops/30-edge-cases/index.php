<?php

function isArgumentsForSubstrCorrect($str, $index, $length)
{
    if ($index < 0) {
        return false;
    }
    if ($length < 0) {
        return false;
    }
    if ($index > strlen($str) - 1) {
        return false;
    }
    if ($index + $length > strlen($str)) {
        return false;
    }

    return true;
}
