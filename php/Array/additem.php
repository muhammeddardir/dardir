<?php
/**
 * add item
 * array_push($array ,value1 ,value2 ,value3 ,....); //add item in last array
 * array_unshift($array ,value1 ,value2 ,value3 ,....); // add item in first array
 */

 echo "array_push" . "<br />";

 $weblang = array("html","css","php","mysql");

 echo "<pre>";
 print_r($weblang);
 echo "</pre>" . "<br />";

 echo "push js ";

 array_push($weblang , "js");

 echo "<pre>";
 print_r($weblang);
 echo "</pre>" . "<br />";

 

 