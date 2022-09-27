<?php

if (isset($_POST['submit'])) {
  $sentence = $_POST['string'];
  $spaces = $_POST['spaces'];
  if ($spaces == "YES") {
    $sentenceLength = strlen(str_replace(" ", "", $sentence));
  } else {
    $sentenceLength = strlen($sentence);
  }
  echo "The length of the sentence is $sentenceLength";
}
