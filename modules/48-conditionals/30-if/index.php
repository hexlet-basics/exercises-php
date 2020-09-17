<?php

namespace HexletBasics\Conditionals\IfStatement;

// BEGIN
function getSentenceTone($sentence)
{
    if (strtoupper($sentence) === $sentence) {
        return 'scream';
    }

    return 'general';
}
// END
