<?php
/**
 * scandir(dir , sort , context);
 */

$link = __DIR__ . "/dardir";

$files = scandir($link, SCANDIR_SORT_NONE); //save as array 

echo "<pre>";
print_r($files);
echo "</pre>";


foreach ($files as $file){

    if (is_file($link . "/" . $file)){
           unlink($link . "/" . $file);
    }
}