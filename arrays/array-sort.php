<?php

$names = ["Mahdi", "Adam", "Ludde", "Calle"];

rsort($names);

echo "<ul>";

foreach ($names as $name) {
  echo "<li>$name</li>";
}

echo "</ul>";
