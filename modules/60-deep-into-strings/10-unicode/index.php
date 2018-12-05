<?php

function invertCase($text)
{
    // BEGIN
    $len = mb_strlen($text);
    $result = '';
    for ($i = 0; $i < $len; $i++) {
        $symbol = mb_substr($text, $i, 1);
        $lowerSymbol = mb_strtolower($symbol);
        if ($symbol === $lowerSymbol) {
            $result .= mb_strtoupper($symbol);
        } else {
            $result .= $lowerSymbol;
        }
    }

    return $result;
    // END
}
