<?php

namespace HexletBasics\Loops\ReturnInLoop;

// BEGIN
function doesContain($str, $char)
{
    $index = 0;
    while ($index < strlen($str)) {
        if ($str[$index] === $char) {
            return true;
        }

        $index++;
    }

    return false;
}
// END
