<?php
/**
 * array_rand($array , num of element); --> get rand num of element
 */

 $arr =array (1,2,3,4,4,5,7,8,9,0);

 $randomkey = array_rand($arr,3);
 echo $arr[$randomkey[0]] . "<br />";
 echo $arr[$randomkey[1]] . "<br />";
 echo $arr[$randomkey[2]] . "<br />";