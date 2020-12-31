<?php

/**
 * mkdir(dirName);
 * rmdir(dirName);
 * is_dir(dirName); // to know if there is dir
 */

 $str = "dir";

mkdir($str);

if(is_dir($str)){

    rmdir($str);
    system('ls');
    echo "dir " . $str . "Fond";
}
else {echo "dir " . $str . "NotFond";}

