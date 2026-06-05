<?php

namespace HexletBasics\Loops\ForLoop;

// BEGIN
function normalizeFilename(string $filename): string
{
    $result = '';

    for ($i = 0; $i < strlen($filename); $i += 1) {
        $currentChar = $filename[$i];

        if ($currentChar === ' ') {
            $result .= '_';
        } else {
            $result .= $currentChar;
        }
    }

    return $result;
}
// END
