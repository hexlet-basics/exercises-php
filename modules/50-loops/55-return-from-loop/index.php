<?php

namespace HexletBasics\Loops\ReturnFromLoop;

// BEGIN
function hasChar($str, $char)
{
    $length = strlen($str);
    $index = 0;
    while ($index < $length) {
        $currentChar = $str[$index];
        if ($currentChar === $char) {
            return true;
        }

        $index++;
    }

    return false;
}
// END
