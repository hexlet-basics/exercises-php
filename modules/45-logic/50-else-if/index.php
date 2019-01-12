<?php

// BEGIN
function whoIsThisHouseToStarks($houseName)
{
    if ($houseName === 'Karstark' || $houseName === 'Tully') {
        return 'friend';
    } elseif ($houseName === 'Lannister' || $houseName === 'Frey') {
        return 'enemy';
    }

    return 'neutral';
}
// END
