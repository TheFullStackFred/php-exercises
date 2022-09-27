<?php

$a = 10;
$b = 5;
$c = true;
$d = true;

if ($d || ($a == 10 && $b > 10)) {
  echo "true";
} else {
  echo "false";
}
