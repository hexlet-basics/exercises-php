<?php

namespace HexletBasics\DefineFunctions\TypeAnnotations;

// BEGIN
function wordMultiply(string $text, int $repetitions): string
{
    return str_repeat($text, $repetitions);
}
// END
