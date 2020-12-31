<?php
/**
 * strcmp($string1,$string2); //string comper
 * strncmp($string1,$string2,num); //string comper num of char
 * output + num ==> first string is longer
 *  //    - num ==>  second //   // //
 *  //    0 ==>  Two String are equal
 */

 $str1 = "mohamm";

 $str2 = "mohamme";

 echo strcmp($str1,$str2) . "<br />";

 echo "<hr>";

 /**
  * strrev($string); //Reverse a string
  */

  $normal = "dardir";
  echo $normal . "<br/>";
  echo strrev($normal);