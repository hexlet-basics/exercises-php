<?php

namespace HexletBasics\Functions;

function isLannisterSoldier($color, $shield)
{
    return ($color === 'red' && $shield === null) || ($shield === 'lion');
}

function parentFor($child, $parent = 'mother')
{
    switch ($child) {
        case 'Daenerys Targaryen':
            $parents = [
                'mother' => 'Rhaella Targaryen',
                'father' => 'Aerys II Targaryen'
            ];
            return $parents[$parent];
        case 'Cersei Lannister':
            $parents = [
                'father' => 'Tywin Lannister'
            ];
            return $parents[$parent];
        case 'Joffrey Baratheon':
            $parents = [
                'mother' => 'Cersei Lannister'
            ];
            return $parents[$parent];

        default:
            throw new \Exception("Wrong child's name '{$child}'");
    }
}

function calculateDistanceBetweenTowns($param)
{
    list($from, $to) = explode('-', $param);
    return calculateDistance($from, $to);
}

function calculateDistance($source, $dest)
{
    if ($source === $dest) return 0;

    $cities = ['Winterfell', 'The Twins', 'The Eyrie', 'Qarth', 'Vaes Dothrak'];
    
    $wrongName = lookForUnknownElement([$source, $dest], $cities);
    if ($wrongName !== '') {
        throw new \Exception("Unknown city: '{$wrongName}'. Please check city name.");
    }

    [$w, $t, $e, $q, $d] = $cities;

    if ($source === $w && $dest === $t || $source === $t && $dest === $w) {
        return 60;
    } elseif ($source === $t && $dest === $e || $source === $e && $dest === $t) {
        return 20;
    } elseif ($source === $q && $dest === $d || $source === $d && $dest === $q) {
        return 125;
    }

    $text = "Unknown distance between cities '{$source}' and '{$dest}'.
        Please ask for a distance between some other pair of cities.";
    throw new \Exception($text);
}

function lookForUnknownElement($elements, $knownElements)
{
    foreach ($elements as $element) {
        if (!in_array($element, $knownElements)) return $element;
    }
    return '';
}
