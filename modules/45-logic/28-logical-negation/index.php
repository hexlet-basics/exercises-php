<?php

namespace HexletBasics\Logic\LogicalNegation;

// BEGIN
function isPalindrome(string $word): bool
{
    $lowerWord = strtolower($word);
    return $lowerWord === strrev($lowerWord);
}

function isNotPalindrome(string $word): bool
{
    return !isPalindrome($word);
}
// END
