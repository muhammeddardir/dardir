<?php
/**
 *  substr( string $string , int $start [, int $length ]): string  //Return part of a string
 * start & length we can use - num
 */

 $str = "dardir";

 echo substr($str , 1) . "<br />";


 echo "add length --> " . substr($str , 1, 2) . "<br />";

 echo "<hr>";

echo "subStringCount" . "<br />";

/**
 * substr_count($string,"substring",strat "offset",length); //Count the number of substring occurrences
 * length = offset +1
 */

$str    = "I Love php becouse php it is a coll lang";
echo strlen($str) . "<br >";

$count1  = substr_count($str,"php");
$count2  = substr_count($str,"php",0);
$count3  = substr_count($str,"php",0,14);
$count4  = substr_count($str,"php",0,24);
echo $count1 . "<br />";
echo $count2 . "<br />";
echo $count3 . "<br />";
echo $count4 . "<br />";
echo "<hr>";

/**
 * substr_compare($string1,$string2,strat possition "offset",length,case);
 * case senssative data by defult false 
 * length = offset +1
 * 
 */

$str1 = "Hello Osama";

$str2 = "Osama";

echo substr_compare($str1,$str2,6.3 ); //H less than O 