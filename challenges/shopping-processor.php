<?php

if (isset($_POST['submit'])) {
  $ccNumber = $_POST['cc'];
  $total = 0;
  $i = 1;

  $last4 = substr($ccNumber, -4, 4);

  $ccNumber = str_split($$ccNumber);

  $ccNumber = array_reverse($ccNumber);

  foreach ($$ccNumber as $digit) {
    if ($i % 2 == 0) {
      $digit *= 2;
      if ($digit > 9) {
        $digit -= 9;
      }
    }
    $total += $digit;
    $i++;
  }
  if ($total % 10 == 0) {
    echo "Your credit card number with last 4 digits " . $last4 . " is valid";
  } else {
    echo "Your credit card number with last 4 digits " . $last4 . " is invalid";
  }
}
