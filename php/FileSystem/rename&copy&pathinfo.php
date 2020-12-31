<?php
/**
 * copy(old file,new file);
 * rename(old file,new file);
 */

 //copy('dardir.txt','dardir_t.txt')

 if(!copy('dardir.txt','dardir_t.txt')){
     echo "File Not Copy";
 }
 else{echo "File Has been copied";}
 ?>
 <hr>

 <?php
/**
 * out put
 * $path = pathinfo(__FILE__);

   echo "<pre>";
   print_r($path);
   echo "</pre>";
----------------------------------
  Array
(
    [dirname] => /var/www/html/php
    [basename] => rename©&pathinfo.php
    [extension] => php
    [filename] => rename©&pathinfo
)
 */
 $path = pathinfo(__FILE__,PATHINFO_DIRNAME);

 echo "<pre>";
print_r($path);
 echo "</pre>";
 echo "<br>";
 $link= pathinfo(__FILE__);
 echo $link[dirname] . "<br>";
 echo $link[basename] . "<br>";
 echo $link[extension] . "<br>";
 echo $link[filename] . "<br>";
 echo "<br>";
if ($link[extension] === 'php'){}