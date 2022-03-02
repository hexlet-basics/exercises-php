<?php

namespace HexletBasics\Logic\TernaryOperator;

// BEGIN
function convertText($string)
{
    if ($string === '') {
        return '';
    }

    return $string[0] === strtoupper($string[0]) ? $string : strrev($string);
}
// END
