<?php
/**
 * Array search
 * 
 */



 /*
 * in_array(Needle , Haystack , Type);
 * Type by defult false //identical --> "1" = "1"
 * True --> not identical --> "1" = 1 
 * 
 */

$weblang = array("html","css","js","php","mysql");

echo "in_array" . "<br />";
if (in_array("php" , $weblang , TRUE)){

    echo "yes php In array" . "<br />";
}
echo in_array("php" , $weblang , TRUE);
echo "<hr />";

/**
 * array_search(Needle , Haystack , Type);
 * Type by defult false //identical --> "1" = "1"
 * True --> not identical --> "1" = 1 
 */
echo "array_search" . "<br />";

$lang = array_search("php" , $weblang , TRUE);

echo "yes It's Found : " . $weblang[$lang] . "  In Index :  " . $lang . "<br />"  ;
echo "<hr />";

/**
 * AssociativeArray
 * array_key_exists(Needle , Haystack );
 * Type by defult false //identical --> "1" = "1"
 * True --> not identical --> "1" = 1 
 */
echo "array_key_exists" ;
 if (array_key_exists("2" ,$weblang)){
echo "yes it's Found : " . $weblang[2] . "<br />" . "<br />";

 }
//---------------------------------------------------
echo "AssociativeArray" . "<br />" . "<br />";
$weblangs = array(
    "html"  => "90 %",
    "css"   => "90 %",
    "php"   => "90 %",
    "mysql" => "90 %",
);

echo "array_key_exists" . "<br />" . "<br />";
 if (array_key_exists("css" ,$weblangs)){
echo "yes it's Found  ";

 }