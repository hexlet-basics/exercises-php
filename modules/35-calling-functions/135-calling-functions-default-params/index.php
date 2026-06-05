<?php

$distance = 450; // расстояние, км
$fuelConsumption = 8.4; // расход топлива, л/100 км
$fuelPrice = 64.2; // цена топлива, руб./литр
$passengers = 4; // количество пассажиров

// BEGIN
$fuel = $distance / 100 * $fuelConsumption;
print_r(round($fuel, 1) . "\n");

$tripCost = $fuel * $fuelPrice;
print_r(round($tripCost, 2) . "\n");

$perPerson = $tripCost / $passengers;
print_r(round($perPerson) . "\n");
// END
