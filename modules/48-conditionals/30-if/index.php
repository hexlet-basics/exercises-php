<?php

namespace HexletBasics\Conditionals\IfStatement;

// BEGIN
function guessNumber(int $guess): string
{
    if ($guess === 42) {
        return 'You win!';
    }

    return 'Try again!';
}
// END
