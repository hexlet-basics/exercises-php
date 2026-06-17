<?php

namespace HexletBasics\Loops\Mutators;

// BEGIN
function makeItFunny(string $str, int $n): string
{
    $i = 0;
    $result = '';
    while ($i < strlen($str)) {
        $currentChar = $str[$i];
        if (($i + 1) % $n === 0) {
            $upperChar = strtoupper($currentChar);
            $result = "{$result}{$upperChar}";
        } else {
            $result = "{$result}{$currentChar}";
        }
        $i++;
    }

    return $result;
}
// END
