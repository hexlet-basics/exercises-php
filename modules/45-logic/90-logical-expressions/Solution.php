<?php

namespace HexletBasics\Logic\LogicalExpressions;

// BEGIN
function isFalsy(int|float|string|bool|null $value): bool
{
    return $value == false;
}
// END
