<?php

$badWords = ["badword1", "badword2"];

if (isset($_POST['submit'])) {
  $text = $_POST['text'];
}

foreach ($badWords as $badWord) {
  $text = str_replace($badWord, "****", $text);
}
echo $text;
