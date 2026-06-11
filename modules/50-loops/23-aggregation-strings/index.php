<?php

namespace HexletBasics\Loops\AggregationStrings;

// BEGIN
function sanitizePhoneNumber(string $phone): string
{
    $i = 0;
    $result = '';

    while ($i < strlen($phone)) {
        $char = $phone[$i];
        if (!str_contains(' ()-', $char)) {
            $result = $result . $char;
        }
        $i = $i + 1;
    }

    return $result;
}
// END
