<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Temperature Conversion</title>
</head>

<body>
  <form action="./temperature-conversion-processor.php
  " method="post">
    <input type="number" name="temperature" placeholder="Enter temperature">
    Celsius<input type="radio" name="type" value="Celsius">
    Fahrenheit<input type="radio" name="type" name="Fahrenheit">
    <select name="accuracy" id="">
      <option value="0">Whole Number</option>
      <option value="1">1 decimal place</option>
      <option value="2">2 decimal places</option>
      <option value="3">3 decimal places</option>
    </select>
    <input type="submit" name="submit" value="Convert">
  </form>
</body>
