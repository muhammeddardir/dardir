<?php
/**
 * Reverse --> array_reverse($array,preserv);
 * Shuffle --> Shuffle($array); //mixed card
 */
$lang = array("html","css","php","mysql");
echo "print_r()" . "<br />";
echo "<pre>";
print_r($lang);
echo "</pre>";
echo "<hr />";
/******************************************************************************** */
echo "array_reverse();  " . "reverse key false" . "<br />" ;
$reversed = array_reverse($lang,false);//save index start 0
echo "<pre>";
print_r($reversed); //start by mysql
echo "</pre>";
echo "array_reverse();  " . "reverse key true" . "<br />" ;
$reversed = array_reverse($lang,true);//save last_index start 
echo "<pre>";
print_r($reversed); //start by mysql
echo "</pre>";
echo "<hr />";
/******************************************************************************** */
echo "Shuffle";
shuffle($lang);
echo "<pre>";
print_r($lang);
echo "</pre>";