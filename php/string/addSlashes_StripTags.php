<?php
/**
 * addslashes : addcslashes($String); 
 * Add slashes to skipped char [' " / \ ] , and space
 * 
 * stripslashes($skipped); 
 * to remove slashes
 * 
 * strip_tags($string , allaw);
 * to remove tags html php xml from String
 */

$str = "hi / dardir's \Friends ";

echo $str . "</br>";

$skipped = addslashes($str);

echo $skipped . "</br>";

$cleen = stripslashes($skipped);

echo $cleen . "</br>";

$string = "I love <h1>PhP</php> tag <a href = 'sd'>sss</a>" ;

echo $string . "</br>";

$stripped = strip_tags($string,"<h1>");

echo $stripped . "</br>";


