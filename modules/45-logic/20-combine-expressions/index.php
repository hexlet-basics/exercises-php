<?php

// BEGIN
function hasTargaryenReference($string)
{
    $lengthKeyword = 9;
    $prefix = substr($string, 0, $lengthKeyword);
    return $prefix === 'Targaryen';
}
// END
