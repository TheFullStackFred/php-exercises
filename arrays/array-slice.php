<?php

$letters = ["a", "b", "c", "d", "e", "f", "g", "h"];

$result = array_slice($letters, 5);

echo "<pre>";
print_r($result);

$result = array_slice($letters, 0, 5);
print_r($result);

$result = array_slice($letters, 3, 5);
print_r($result);

$result = array_slice($letters, -5, 3);
print_r($result);
