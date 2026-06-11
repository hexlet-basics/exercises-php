<?php

namespace HexletBasics\DeepIntoStrings\StartWith;

function startsWith($text, $substr)
{
    // BEGIN
    return mb_strpos($text, $substr) === 0;
    // END
}
