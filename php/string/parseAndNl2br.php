<?php
/**
 *  parse_str($string,Array); //Parses the string into variables
 * nl2br ($string, xhtml);// Inserts HTML line breaks before all newlines in a string
 * xhtml by defult true <br />
 * xhtml by defult false <br >
 * \n -- > add new line in source code 
 */

 $string = "name=mohammed&age=32&skills=4";
 $parse  = parse_str($string);
 echo $name . "<br />";
 echo $age . "<br />";
 echo $skills . "<br />";

 echo "<hr>" . "<br />";

 $parse  = parse_str($string,$myArray);
 echo "<pre>";
 echo print_r($myArray) . "<br />";
 echo "</pre>";

 echo "<hr>" . "<br />";

 $str = "I \n Love \n You";
 
 echo $str . "<br />";

 echo nl2br($str);
