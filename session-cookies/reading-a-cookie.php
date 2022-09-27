<?php

if (isset($_COOKIE["fruit"])) {
  echo $_COOKIE["fruit"];
} else {
  echo "No cookie set";
}
