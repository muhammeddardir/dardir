<?php
/**
 * array_uniq($array ,sorting type); --> remove repete element
 * defult sorting type SORT_REGULAR  
 * 
 */

$arr =array (1,2,3,4,4,5,7,8,9,0);
$arra = array_unique($arr);

echo "<pre>";
print_r($arra);
echo "</pre>";
echo "<hr / >";