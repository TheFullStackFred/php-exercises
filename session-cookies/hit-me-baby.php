<?php

session_start();

if (isset($_SESSION['hits'])) {
  $_SESSION['hits']++;
  echo "You have hit this page " . $_SESSION['hits'] . " times";
} else {
  $_SESSION['hits'] = 1;
  echo "This is your first time on this page";
}
