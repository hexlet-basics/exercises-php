<?php

namespace HexletBasics\Loops\ReturnFromLoops;

// BEGIN
function hasAtSymbol(string $email): bool
{
    $index = 0;
    while ($index < strlen($email)) {
        if ($email[$index] === '@') {
            return true;
        }

        $index += 1;
    }

    return false;
}
// END
