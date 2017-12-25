<?php

// BEGIN
function hasTargaryenReference($string)
{
    $prefix = substr($string, 0, 9);
    return $prefix === 'Targaryen';
}
// END
