<?php

// BEGIN
function whoIsThisHouseForStarks($houseName)
{
    if ($houseName === 'karstark' || $houseName === 'tally') {
        return 'friend';
    } elseif ($houseName === 'lannister' || $houseName === 'frey') {
        return 'enemy';
    }

    return 'neutral';
}
// END
