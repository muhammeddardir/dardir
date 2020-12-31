<?php
/**
 * strstr($tring[requer],"search",before_search[false by defult]);
 * stristr($tring[requer],"search",before_search[false by defult]);
 * i --> insenssative char
 * strchr(); = alias = strstr();
 */

$str    = "I Love php becouse php it is a coll lang";

echo "before_search[false]" . "<br />";
$char   = strstr($str,"php"); 
echo $char . "<br />";

echo "before_search[true]" . "<br />";
$char   = strstr($str,"php",true); 
echo $char . "<br />";

