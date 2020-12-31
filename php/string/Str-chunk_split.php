<?php
/**
 * Str_Split : str_split(String ,Length);
 * Length of word
 */

$string = "muhammed mahmoud dardir hussen";

$str = str_split($string);
echo "str_split()" . " <br />";
$var = str_split($string ,100);
echo "<pre>" ;
print_r($var);
echo "</pre>";


/************************************************************************* */
/**
 * chunk_split : chunk_split(String ,Length[defult value 76] ,endLength[defult value \r\n]);
 * chunk  --> قطعه
 * use convert to based 64
 * not convert to array
 */

$string = "muhammed mahmoud dardir hussen";

$str = str_split($string);
echo "chunk_split()" . " <br />";

$varr = chunk_split($string ,5 ,"--");

 echo $varr;