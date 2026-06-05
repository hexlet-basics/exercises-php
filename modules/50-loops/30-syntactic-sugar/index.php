<?php

namespace HexletBasics\Loops\SyntacticSugar;

// BEGIN
function buildProgressBar(int $completed, int $total): string
{
    $index = 0;
    $result = '';

    while ($index < $total) {
        if ($index < $completed) {
            $result .= '#';
        } else {
            $result .= '-';
        }
        $index += 1;
    }

    return $result;
}
// END
