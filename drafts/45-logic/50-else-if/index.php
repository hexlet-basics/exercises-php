<?php

// BEGIN
function whoIsThisHouseToStarks($houseName)
{
    if ($houseName === 'Karstark' || $houseName === 'Tally') {
        return 'Friend';
    } elseif ($houseName === 'Lannister' || $houseName === 'Frey') {
        return 'enemy';
    }

    return 'neutral';
}
// END
