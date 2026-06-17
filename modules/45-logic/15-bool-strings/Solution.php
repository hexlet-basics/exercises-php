<?php

namespace HexletBasics\Logic\BoolStrings;

// BEGIN
function isLongWord(string $word): bool
{
    return strlen($word) > 5;
}
// END
