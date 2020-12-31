<?php
/**
 *  str_replace(search,replace,string,count);
 * search,replace --> may be array
 * sensitive word
 * 
 */
 $string = "I love php The php team is pleased to announce the eighth testing release of php";
 echo " str_replace" . "<br/>" . "<br/>";

 echo $string . "<br/>" . "<br/>" . "<br/>" . "<br/>" . "<br/>";


 $string2 = str_replace("php","javascript" , $string,$i);
 

 echo  $string2 . "And replacement count is" . $i . "<br/>" . "<br/>";
 echo "<hr />";
/************************************************************************************ */
$string = "I love php The php team is pleased to announce the eighth testing release of php";

echo "explode with str_replace" . "<br/>" . "<br/>";

$arr =explode(" ",$string);
echo "<pre>" ;
print_r($arr);
echo "</pre>";

$arr = str_replace("php","javascript" , $arr);

echo "<pre>" ;
print_r($arr);
echo "</pre>";

echo "<hr />";
/************************************************************************************ */
echo "implode" . "<br/>" . "<br/>" . "<br/>" . "<br/>";
$str = implode(" ",$arr);
echo $str;
echo "<hr />";
/************************************************************************************ */
/************************************************************************************ */
/************************************************************************************ */
echo "but search and replace array" . "<br/>" . "<br/>" . "<br/>" . "<br/>";

$string = "I love php The php team is pleased to announce the eighth testing release of php";

echo $string . "<br/>" . "<br/>" . "<br/>" . "<br/>" . "<br/>";


$string2 = str_replace(array("php","The" ,"is"),"Replaced" , $string,$i);

echo $string2 . "<br/>" . "<br/>" . "<br/>" . "<br/>" . "<br/>";
echo "<hr />";
/************************************************************************************ */

$string3 = "I|love&php-The/php+team is-pleased to announce the eighth testing release of php";
echo $string3 . "<br/>" . "<br/>" . "<br/>" . "<br/>" . "<br/>";

$string4 = str_replace(array("/","|","&","-","+") , "  " , $string3);

echo $string4 . "<br/>" . "<br/>" . "<br/>" . "<br/>" . "<br/>";
/************************************************************************************ */
/************************************************************************************ */
/************************************************************************************ */
echo "Example" . "<br />";

$example = "line1 \n\r  line2 \n\r line3 \n\r";
echo $example . "<br />";

$order = array ("\n","\n\r","\r");
$order = str_replace($order, "<br />", $example);
echo $order;