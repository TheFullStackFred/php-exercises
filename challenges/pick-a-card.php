<?php

$suits = ["Clubs", "Diamonds", "Hearts", "Spades"];

$values = ["Ace", 2, 3, 4, 5, 6, 7, 8, 9, 10, "Jack", "Queen", "King"];

$suit = $suits[array_rand($suits)];

$value = $values[array_rand($values)];

$card = "Your card is $value of $suit";

echo $card;
