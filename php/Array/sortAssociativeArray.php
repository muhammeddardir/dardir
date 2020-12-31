<?php
/**
 *   sort Associative Arra
 * asort($Array , Sorting type); //sort vslue
 * arsort($Array , Sorting type); //sort value from end .. r =revers
 * ksort($Array , Sorting type); //sort key form firsst
 * krsort($Array , Sorting type); //sort key from end
 */

$weblang = array(
    "html"  => "90 %",
    "css"   => "70 %",
    "php"   => "80 %",
    "mysql" => "40 %",
);

echo "<pre>";
print_r($weblang);
echo "</pre>";
echo "<br />";

echo "after sort()" . "<br />" . "<br />";
asort($weblang);
echo "<pre>";
print_r($weblang);
echo "</pre>";
echo "<br />";
echo "<hr />";

echo "after arsort()" . "<br />" . "<br />";
arsort($weblang);
echo "<pre>";
print_r($weblang);
echo "</pre>";
echo "<br />";
echo "<hr />";
