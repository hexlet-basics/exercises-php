<?php

namespace HexletBasics\Conditionals\ElseIfStatement;

// BEGIN
function getTrafficLightAction(string $color): string
{
    if ($color === 'green') {
        return 'go';
    } elseif ($color === 'yellow') {
        return 'slow down';
    } elseif ($color === 'red') {
        return 'stop';
    }

    return 'unknown';
}
// END
