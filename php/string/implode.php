<?php
/**
 * implode : implode(Seperator,SArray);
 * convert array to String
 * defult value Seperator --> "" empty
 * 
 * join(Seperator,SArray); --> Alias for implode
 */

 $arr =array("muhammed","mahmoud","dardir","hussen");

 $implode = implode(" & ",$arr);

 echo "hello our moderator is :" . $implode;