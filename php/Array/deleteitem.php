<?php

/**
 * delete item
 * array_pop($array ,value1 ,value2 ,value3 ,....); //delete item in last array
 * array_shift($array ,value1 ,value2 ,value3 ,....); // delete item in first array
 */

echo "array_pop" . "<br />";

$weblang = array("html","css","php","mysql");

echo "<pre>";
print_r($weblang);
echo "</pre>" . "<br />";

echo "pop js ";

array_pop($weblang , "js");

echo "<pre>";
print_r($weblang);
echo "</pre>" . "<br />";