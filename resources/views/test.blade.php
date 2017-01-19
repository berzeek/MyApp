<?php

echo 'Given an arbitrary text document written in English, write a program that will generate a <br>
concordance, i.e. an alphabetical list of all word occurrences, labeled with word frequencies. <br>
Bonus: label each word with the sentence numbers in which each occurrence appeared. <br><br>';

$string = 'Ham followed now ecstatic use speaking exercise exercise may repeated.
Himself he evident oh greatly my on inhabit general concern.
It earnest amongst he showing females so improve in picture.
Mrs can hundred its greater account.
Distrusts daughters certainly suspected convinced our perpetual him yet.
Words did noise taken right state are since. ';

$text = preg_split('/((^\p{P}+)|(\p{P}*\s+\p{P}*)|(\p{P}+$))/', $string, -1, PREG_SPLIT_NO_EMPTY);

$array = array_unique($text);

usort($array, 'strnatcasecmp');
foreach ($array as $key => $value){

    echo strtolower(substr($value, 0, 1)) . '. ' . $value . ' {' .substr_count($string, $value).'}'  . "<br>";
}