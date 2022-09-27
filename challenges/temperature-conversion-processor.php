<?php

if (isset($_POST['submit'])) {
  $temperature = $_POST['temperature'];
  $type = $_POST['type'];
  $accuracy = $_POST['accuracy'];
  if ($type == "Celsius") {
    $convertedTemperature = $temperature * 9 / 5 + 32;
    $type = "Fahrenheit";
  } else {
    $convertedTemperature = ($temperature - 32) * 5 / 9;
    $type = "Celsius";
  }
  $convertedTemperature = round($convertedTemperature, $accuracy);

  echo "The converted temperature is $convertedTemperature&deg$type to $accuracy decimal places";
} else {
  echo "Please visit the form page to convert a temperature";
}
