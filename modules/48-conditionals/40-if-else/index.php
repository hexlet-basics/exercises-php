<?php

namespace HexletBasics\Conditionals\IfElse;

// BEGIN
function normalizeUrl(string $url): string
{
    $prefix = 'https://';

    if (str_starts_with($url, $prefix)) {
        return $url;
    }

    if (str_starts_with($url, 'http://')) {
        $domain = substr($url, 7);
    } else {
        $domain = $url;
    }

    return "{$prefix}{$domain}";
}
// END
