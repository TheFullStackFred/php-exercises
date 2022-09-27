<?php

$cities = ["London", "Paris", "Berlin"];

echo "<pre>";

print_R($cities);

array_push($cities, "New York");

print_r($cities);

array_unshift($cities, "Dublin", "Amsterdam");

print_r($cities);
