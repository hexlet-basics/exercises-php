<?php

namespace HexletBasics\Functions;

function parentFor($childName, $who = 'mother')
{
    switch ($childName) {
        case 'Daenerys Targaryen':
            $parents = [
                'mother' => 'Rhaella Targaryen'
            ];
            return $parents[$who];
        case 'Cersei Lannister':
            $parents = [
                'father' => 'Taiwan Lannister'
            ];
            return $parents[$who];
        case 'Joffrey Baratheon':
            $parents = [
                'mother' => 'Cersei Lannister'
            ];
            return $parents[$who];

        default:
            throw new \Exception("Wrong child's name '{$childName}");
    }
}

function calculateDistanceFromTirion($param)
{
    list($from, $to) = explode('-', $param);
    return calculateDistance($from, $to);
}

function calculateDistance($source, $dest)
{
    if ($source === 'Winterfell' && $dest === 'The Twins') {
        return 60;
    } elseif ($source === 'The Twins' && $dest === 'The Eyrie') {
        return 20;
    } elseif ($source === 'Qarth' && $dest === 'Vaes Dothrak') {
        return 125;
    }

    throw new \Exception("Unknown cities: '{$source}' and {$dest}. Please check names");
}
