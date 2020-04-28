<?php

namespace HexletBasics\Dates\DateFunction;

function getCustomDate($timestamp)
{
    // BEGIN
    return date('d/m/Y', $timestamp);
    // END
}
