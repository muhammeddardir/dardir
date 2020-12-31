<?php
/**
 * str_word_count($string[Requer], int $format = 0 [optional],charlist[Optional]); //Return information about words used in a string
 * Format 1 --> indexed Array
 * Format 2 --> associative array //key postions char in string 
 * charlist // to calc the charlist
 */

$String  = "Welcom $ Dardir";
echo $String . "<br />";


$count   = str_word_count($String);
echo $count . "<br />";

$count   = str_word_count($String);

echo "<pre>";
$count   = str_word_count($String,1,"$");
echo print_r($count) . "<br />";
echo "</pre>";


$count   = str_word_count($String);

echo "<pre>";
$count   = str_word_count($String,2);
echo print_r($count) . "<br />";
echo "</pre>";