<?php

$time = time();
echo $time . "<br>";

$string = '24 december';
$date = strtotime($string);
echo $date . "<br>";

$seconds = $date - $time;
$minutes = $seconds / 60;
$hours = $minutes / 60;
$days = floor($hours / 24);

echo "It is $days days until $string";
