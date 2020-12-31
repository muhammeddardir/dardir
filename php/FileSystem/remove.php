<?php
/**
 * unlink(fileName,context); // remive file
 * 
 */

$file = 'dardir.php';
if (file_exists($file) && is_writable($file)) { 
    unlink($file);
    echo "file deleted";
}
else{ 
    if (file_exists($f1le)) {
         echo 'Sorry The F1le Is Not Writable i will change the permission please Reload this page'; 
         chmod ($f1le, 0755); 
    }
    else{echo 'file Not exists';}
   }
/**
 * rmdir(dirName,context); // remive dir
 * 
 */