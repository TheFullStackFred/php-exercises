<?php

//counting areas of differents shapes

// Area of a rectangle
$length = 10;
$width = 5;

$areaRectangle = $length * $width;

echo "The area of a rectangle with length = $length and width = $width is $areaRectangle";

// Area of a triangle
$base = 12;
$height = 3;

$areaTriangle = $base * $height / 2;

echo "<br>" . $areaTriangle;

// Area of a circle
$radius = 5;
$pi = 3.14;

$areaCircle = $pi * pow($radius, 2);

echo "<br>" . $areaCircle;

// With the pi function
$areaCircle = pi() * pow($radius, 2);

echo "<br>" . $areaCircle;

// Area of a trapezium (trapezoid)
$sideA = 10;
$sideB = 8;
$height = 4;

$area = ($sideA + $sideB) * $height / 2;

echo  "<br>" . $area;
