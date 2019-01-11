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
    $w = 'Winterfell';
    $t = 'The Twins';
    $e = 'The Eyrie';
    $q = 'Qarth';
    $d = 'Vaes Dothrak';

    $knownCities = array($w, $t, $e, $q, $d);

    if (!isValidCityName($source, $knownCities)) {
        throw new \Exception("Unknown city: '{$source}'. Please check city name.");
    }

    if (!isValidCityName($dest, $knownCities)) {
        throw new \Exception("Unknown city: '{$dest}'. Please check city name.");
    }
    
    if ($source === $w && $dest === $t || $source === $t && $dest === $w) {
        return 60;
    } elseif ($source === $t && $dest === $e || $source === $e && $dest === $t) {
        return 20;
    } elseif ($source === $q && $dest === $d || $source === $d && $dest === $q) {
        return 125;
    }

    throw new \Exception("Unknown distance between cities '{$source}' and '{$dest}'. Please ask for a distance between some other pair of cities.");
}

function isValidCityName($city, $knownCities)
{
    foreach ($knownCities as &$knownCity) {
        if ($city === $knownCity) return true;
    }
    return false;
}
