<?php

namespace HexletBasics\Conditionals\IfStatement;

// BEGIN
function guessNumber($guess)
{
    if ($guess === 42) {
        return 'You win!';
    }

    return 'Try again!';
}
// END
