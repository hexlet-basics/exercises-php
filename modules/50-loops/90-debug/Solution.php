<?php

namespace HexletBasics\Loops\Debug;

// BEGIN
function compress(string $string): string
{
    if ($string === '') {
        return '';
    }

    $result = '';
    $count = 1;

    for ($i = 1; $i < strlen($string); $i += 1) {
        if ($string[$i] === $string[$i - 1]) {
            $count += 1;
        } else {
            $result .= $string[$i - 1];
            if ($count > 1) {
                $result .= $count;
            }
            $count = 1;
        }
    }

    $result .= $string[-1];
    if ($count > 1) {
        $result .= $count;
    }

    return $result;
}
// END
