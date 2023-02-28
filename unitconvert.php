<?php
/**
 * Unit Convert, simple conversion functions written in PHP.
 *
 * Author: Jan Prazak, https://github.com/Amarok24
 * License: The Unlicense
 * Date: 2023-02-28
 */

declare(strict_types=1);

require 'Weight.php';
require 'Length.php';
require 'Temperature.php';

use UnitConvert\Weight;
use UnitConvert\Length;
use UnitConvert\Temperature;

print '10 kg -> stones = ';
print Weight::from_kg(10)->to_st(); // returns 1.57473
print "\n\n";

print '15 km -> miles = ';
print Length::from_km(15)->to_mi(); // returns 9.320567788
print "\n\n";

print '-5°C -> Fahrenheit = ';
print Temperature::from_celsius(-5)->to_fahrenheit(); // returns 23
print "\n\n";

print '150°K -> Fahrenheit = ';
print Temperature::from_kelvin(150)->to_fahrenheit(); // returns -189.67
print "\n\n";
