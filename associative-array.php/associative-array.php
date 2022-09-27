<?php

$cities = ["London", "Paris", "Brisbane", "Dublin"];

foreach ($cities as $city) {
  echo $city . "<br>";
}

$students = ["Ludde" => 30, "Mehmet" => 85, "Adam" => 25];

foreach ($students as $student => $age) {
  echo "$student is $age years old.<br>";
}
