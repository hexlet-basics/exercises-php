<?php

namespace HexletBasics\Conditionals\SwitchStatement;

// BEGIN
function getNumberExplanation($number)
{
    switch ($number) {
        case 666:
            return 'devil number';
        case 7:
            return 'prime number';
        case 42:
            return 'answer for everything';
        default:
            return 'just a number';
    }
}
// END
