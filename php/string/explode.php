<?php
/**
 * explode : explode(Seperator,String,Limit); ---> spilte String into array
 * Limit --> possitive negative zero
 */

 $string = "muhammed dardir" ;
 echo $string . "<br />";

echo "possitive" . " <br />";
$arr = explode(" ",$string,2);
echo "<pre>" ;
print_r($arr);
echo "</pre>";

echo "negative" . " <br />";
$arr = explode(" ",$string,-1);
echo "<pre>" ;
print_r($arr);
echo "</pre>";

echo "zero" . " <br />";
$arr = explode(" ",$string,0);
print_r($arr);
echo "</pre>";
echo "<hr>";
/************************************************************************* */
$ex = "widget,header,footer,conact";

echo "ex" . " <br />";
echo "<pre>";
$exm = explode(",",$ex);
print_r($exm);
echo "</pre>";

for ($i = 0 ; $i < count($exm) ; $i++){

echo "<link rel ='stylesheet' href='css/" . $exm[$i] . ".css'>";
    
}