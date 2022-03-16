<?php

namespace HexletBasics\Conditionals\ElseIfStatement;

// BEGIN
function whatIsThis($houseName)
{
    if ($houseName === 'orange' || $houseName === 'apple') {
        return 'fruit';
    } elseif ($houseName === 'cabbage' || $houseName === 'carrot') {
        return 'vegetable';
    }

    return 'other';
}
// END
