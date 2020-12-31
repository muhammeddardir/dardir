<?php
/**
 * trim : trim(String , CharList); //Strip whitespace (or other characters) from the beginning and end of a string
 * defult CharList --> new line , \0 null ,\t tap ,\n newline , \r carreg return ,\x0B virtual tap , "  "
 * قص الاطراف 
 *  ltrim($str);  // left
 *  rtrim($str);  // right  
 *   ltrim($str , "I  p");
 */

 $str = " \x0B I \x0B Love \x0B\x0B PhP ";

 echo "String" . "</br>";
 echo "$str" . "</br>";
 
 echo "var_dump string" . "</br>";
 echo var_dump($str) . "</br>";

 $trimed = trim($str);

 echo "trim"  . "</br>";
 echo $trimed   . "</br>";

 echo "var_dump trim" . "</br>";
 echo var_dump($trimed) . "</br>";

 