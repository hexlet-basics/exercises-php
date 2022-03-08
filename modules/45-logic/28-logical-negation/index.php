<?php

namespace HexletBasics\Logic\LogicalNegation;

use function HexletBasics\Functions\mb_strrev;

// BEGIN
function isPalindrome($word)
{
    $lowerWord = strtolower($word);
    return $lowerWord === strrev($lowerWord);
}

function isNotPalindrome($word)
{
    return !isPalindrome($word);
}
// END
