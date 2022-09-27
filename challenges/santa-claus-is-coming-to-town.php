<?php

date_default_timezone_set('Stockholm/Sweden');

$christmasDay = strtotime("December 24");

$currentTime = time();

$seconds = $christmasDay - $currentTime;

$minutes = $seconds / 60;

$hours = $minutes / 60;

$days = ceil($hours / 24);

echo "It is $days days until Christmas";
