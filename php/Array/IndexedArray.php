<?php

/*
Indexed Array 
syntax --> array(element1 , element2 ,element3);
*/

$arra = array("dardir","hussen","muhammed","yossef","mahmoud");
echo "Print Structure Of Array By Print_r() Method";
//way num 1
echo "<pre>";
print_r($arra);
echo "</pre>";
echo "<hr />";

//way num 2
echo $arra[0];
//way num 3
$workers[4]="dardir"; //index will startvby num 3 
$workers[]="hussen";
$workers[]="muhammed";
$workers[]="yossef";
$workers[]="mahmoud";

echo "<pre>";
print_r($workers);
echo "</pre>";
echo "<hr />";

//array inside Array
$lang = array("html","css",array("ajax","iquery","angular"),"php","mysql");
echo "<pre>";
print_r($lang);
echo "</pre>";
echo $lang[2][1];
echo "<hr />";
/****************************************************************/
$weblang = array("html","css",array("ajax","iquery","angular"),"php","mysql");
$weblang[]="Ruby"; //add element in array
$weblang[1]="css3"; //override in array
/****************************************************************/
echo "Print foreach Loop";
echo "<ul>";
foreach ($weblang as $language){
echo "<li>" . $language . "</li>";
}
echo "</ul>";
echo "<hr />";
/****************************************************************/
echo "Print for Loop";
echo "<ul>";
for($language = 0 ;$language < count($weblang);$language++){
echo "<li>" . $weblang[$language] . "</li>";
}
echo "</ul>";
echo "<hr />";
/****************************************************************/
echo "Print number of array";
echo "number element in array is  " . count($weblang);
echo "<hr />";

