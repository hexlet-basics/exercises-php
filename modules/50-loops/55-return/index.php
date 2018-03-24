<?php

function doesContain($str, $char)
{
    $index = 0;
    while ($index <= strlen($str) - 1) {
        if ($str[$index] === $char) {
            return true;
        }

        $index++;
    }

    return false;
}
