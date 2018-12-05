<?php

// BEGIN
function normalizeUrl($site)
{
    if (strpos($site, 'https://') === false) {
        return "https://{$site}";
    }

    return $site;
}
// END
