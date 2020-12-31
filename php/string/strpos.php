<?php
/**
 * strpos:strpos($String[requer],Find [requer],offset[optional]); //Find the position of the first occurrence of a substring in a string
 * stripos:strpos($String[requer],Find [requer],offset[optional]); //Find the position of the first occurrence of a substring in a string
 * strrpos:strpos($String[requer],Find [requer],offset[optional]); //Find the position of the first occurrence of a substring in a string
 * strripos:strpos($String[requer],Find [requer],offset[optional]); //Find the position of the first occurrence of a substring in a string
 * i -- > insenseative
 * r -- > rigth posstion use -1 
 * offset -- > num i will start index
 */


$str    = "I Love php becouse php it is a coll lang";
echo " strpos and Find " . "<br />";
$pos = strpos($str,"php");
echo $pos . "<br />";

echo " strpos and Find  and offset" . "<br />";
$pos2 = strpos($str,"php",8);

echo $pos2 . "<br />";

echo "stripos" . "<br />";
$pos3 = stripos($str,"Php",8);

echo $pos3 . "<br />";
