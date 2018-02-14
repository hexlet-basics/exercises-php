<?php

function isContain($str, $char)
{
    $index = strlen($str) - 1;
    while ($index >= 0) {
        if ($str[$index] === $char) {
            return true;
        }

        $index--;
    }

    return false;
}
