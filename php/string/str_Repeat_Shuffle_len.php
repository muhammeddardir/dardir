<?php
/**
 * str_repeat(String[Require],Repeat[Requer]);
 */

 $String = "dardir" . "</br>";
 echo "Repeat" . "</br>";
 $Repeat = str_repeat($String,100);
 
 echo $Repeat;
/**
 * str_shuffle(String[Require]);
 */
echo "shuffle" . "</br>";
 $shuffle = str_shuffle($String);
 echo $shuffle . "</br>";
 /**
 * strlen(String[Require]); // count string lingth
 */
echo "len" . "</br>";
$len = strlen($String);
echo $len . "</br>";

if ($len > 10){
    echo "your string lingth more than 10";
}
