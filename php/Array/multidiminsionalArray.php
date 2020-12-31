<?php
/**
 * multidiminsionalArray
 * indexed array in indexed array
 * array(
 *   array(element,element,element),
 *   array(element,element,element),
 *   array(element,element,element),
 * 
 * );

 */
echo "indexed array in indexed array";
 $dite = array(
     array("apple","panana","egg"),
     array("apple","panana","egg"),
     array("apple","panana","egg"),
     array("apple","panana","egg"),
     array("apple","panana","egg"),

 );
 echo "<br />";
 echo "Foreach multi";
foreach ($dite as $day){
    foreach ($day as $houer){
        echo "<li>" . $houer . "</li>" ;
    }
}
echo "<br />";
echo "print_r()";
 echo "<pre>";
print_r($dite);
echo "</pre>";
echo $dite[5][0][1];
echo "<hr />";
/**
 * multidiminsionalArray
 * indexed array in AssociativeArray array
 * array(
 *   "key1" => array(element,element,element),
 *   "key2" => array(element,element,element),
 *   "key3" => array(element,element,element),
 * 
 * );

 */
echo "indexed array in AssociativeArray array";
$dite = array(
    "day1" => array("apple","panana","egg"),
    "day2" => array("apple","panana","egg"),
    "day3" => array("apple","panana","egg"),
    "day4" => array("apple","panana","egg"),

);
echo "peint_r()" . "<br />";
echo "<pre>";
print_r($dite);
echo "</pre>";
echo $dite["day5"][2][2];
echo "foreach" . "<br />";
foreach ($dite as $day => $progress){
    echo $day . "<br />";
    foreach ($progress as $prog){
        echo $prog . "<br />";
    }
}
echo "<hr />";
