<?php
/**
 * strtolower($String);
 * lcfirst (); // first char lower case
 * ucfirst (); // //      // upper  //
 * ucwords();  //Uppercase the first character of each word in a string
 */

$String  = "Welcom Dardir";
$lower   = strtolower($String);
$upper   = strtoupper($String);
$lc      = lcfirst($String);
$uc      = ucfirst($String);
$ucwords = ucwords($String);
echo $lower . "</br>";
echo $upper . "</br>";
echo $lc . "</br>";
echo $uc . "</br>";
echo $ucwords . "</br>";
