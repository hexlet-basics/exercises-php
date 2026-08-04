<?php

$distance = 450; // distance, km
$fuelConsumption = 8.4; // fuel consumption, l/100 km
$fuelPrice = 64.2; // fuel price per litre
$passengers = 4; // number of passengers

// BEGIN
$fuel = $distance / 100 * $fuelConsumption;
print_r(round($fuel, 1) . "\n");

$tripCost = $fuel * $fuelPrice;
print_r(round($tripCost, 2) . "\n");

$perPerson = $tripCost / $passengers;
print_r(round($perPerson) . "\n");
// END
