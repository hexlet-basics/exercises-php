<?php

namespace HexletBasics\Loops\ConditionsInsideLoops;

// BEGIN
function countHashtags(string $text): int
{
    $index = 0;
    $count = 0;
    while ($index < strlen($text)) {
        if ($text[$index] === '#') {
            $count = $count + 1;
        }
        $index = $index + 1;
    }

    return $count;
}
// END
