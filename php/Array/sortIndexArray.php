<?php

/**
 * Sort Indexed_Array
 * sort($Array , Sorting type); //sort form firsst
 * rsort($Array , Sorting type); //sort from end .. r =revers
 */

$weblang = array("html","css","js","php","mysql");
echo "<pre>";
print_r($weblang);
echo "</pre>";
echo "<br />";
echo "after sort()" . "<br />" . "<br />";
sort($weblang);
echo "<pre>";
print_r($weblang);
echo "</pre>";
echo "<br />";
echo "<hr />";
