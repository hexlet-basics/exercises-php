<?php

namespace HexletBasics\Conditionals\IfElse;

// BEGIN
function normalizeUrl($url)
{
    if (strpos($url, 'http://') === 0) {
        $domain = substr($url, 7);
    } else {
        $domain = $url;
    }

    return "https://{$domain}";
}
// END
