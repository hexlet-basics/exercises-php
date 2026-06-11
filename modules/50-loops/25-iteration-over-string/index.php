<?php

namespace HexletBasics\Loops\IterationOverString;

// BEGIN
function maskCardNumber(string $cardNumber): string
{
    $result = '';
    $i = 0;
    $visiblePartStart = strlen($cardNumber) - 4;

    while ($i < strlen($cardNumber)) {
        if ($i < $visiblePartStart) {
            $result = $result . '*';
        } else {
            $result = $result . $cardNumber[$i];
        }
        $i = $i + 1;
    }

    return $result;
}
// END
