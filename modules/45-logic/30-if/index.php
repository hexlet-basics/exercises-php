<?php

// BEGIN
function getSentenceTone($sentence)
{
    if (strtoupper($sentence) === $sentence) {
        return 'scream';
    }

    return 'normal';
}
// END
