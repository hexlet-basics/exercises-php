<?php

namespace HexletBasics\Logic\CombineExpressions;

// BEGIN
function isInternationalPhone(string $phone): bool
{
    return $phone[0] === '+';
}
// END
