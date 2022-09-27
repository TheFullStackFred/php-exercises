<?php

date_default_timezone_set('Sweden/Stockholm');

echo date('l jS F Y') . "<br>";

echo "Today is " . date('l') . "<br>";

echo date('l d F, Y') . "<br>";

echo date('Y/m/d') . "<br>";

echo date('l dS F Y, g:i A') . "<br>";

$year = date('L');

if ($year) {
  echo "This is a leap year";
} else {
  echo "This is not a leap year";
}
