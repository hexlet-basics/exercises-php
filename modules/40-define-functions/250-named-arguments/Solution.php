<?php

namespace HexletBasics\DefineFunctions\NamedArguments;

function trimAndRepeat($text, $offset = 0, $repetitions = 1)
{
    // BEGIN
    return str_repeat(substr($text, $offset), $repetitions);
    // END
}
