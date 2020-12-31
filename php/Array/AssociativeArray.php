<?php
/**
 * AssociativeArray
 * syntax
 * array(
 * key1 ==> value1;
 * key2 ==> value2;
 * key3 ==> value3;
 * key4 ==> value4;
 * );
 * key accept int and string dataType
 * key must be uniq
 foreach ($weblang as $key => $value){
echo "<li>" . $language . $progress . " " . "</li>";
}
 */


$weblang = array(
    "html"  => "90 %",
    "css"   => "90 %",
    "php"   => "90 %",
    "mysql" => "90 %",
);
$weblang ["Ruby"] = "75 %"; //add element in array

echo "Print foreach Loop";
foreach ($weblang as $language => $progress){
    echo "<li>" . $language . " => " . $progress . "</li>";
    }
echo "<hr />";

/********************************************************************* */

echo "<pre>";
print_r($weblang);
echo "</pre>";
echo "<hr / >";