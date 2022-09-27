<?php

$radius = 5;

$area = pi() * pow($radius, 2);

echo $area . "<br>";

$area = round($area, 2, PHP_ROUND_HALF_UP);

echo "The area of a circle with a radius of $radius is $area to 2 decimal places";
