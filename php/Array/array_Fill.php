<?php
/**
 * array_fill(start index,Num element inarray , value);
 */

 $array = array_fill(1,10,"aya");
 
 echo "<pre>";
print_r($array);
echo "</pre>";
echo "<hr / >";

/******************************************* */

$array = array_fill(
    1,
    10,
    array_fill
    (1,
    10,
    "aya"
    )


);
 
echo "<pre>";
print_r($array);
echo "</pre>";
echo "<hr / >";