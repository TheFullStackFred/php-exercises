<?php

$string = "Adam, Ludde, Mehmet, Sven";

echo $string;

$explodedName = explode(", ", $string);

echo "<pre>";

print_r($explodedName);

$implodedNames = implode("|", $explodedName);

echo $implodedNames;
