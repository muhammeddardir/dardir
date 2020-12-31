<?php
/** [ 1 ] Check If The Directory Is Exists Or No
 *  [ 2 ] Make The Directory
 *  [ 3 ] Assign This Directory To Variable
 *  [ 4 ] Create A File Inside This Directory
 *  [ 5 ] Assign This File To Variable
 *  [ 6 ] Change Mode Of This File To Be Read Only
 *  [ 7 ] Check If This File Is Writable
 *  [ 8 ] Change Mode Of This File And Make It Writable
 *  [ 9 ] Include This File
 */

 if (file_exists(__DIR__ . '/Created')){
     echo "Sorry your File Is Allredy Created" . "<br />";
 }
 else {
     mkdir(__DIR__ . '/Created');
     echo "your file Created successfuly" . "<br />";
 }

 $directory = __DIR__. '/Created/';

  file_put_contents($directory . 'text.php' , "Created By file_put_contents" );

  $File = $directory . 'text.php';

  chmod($File , 0444);

  if (is_writable($File)){
    file_put_contents($directory . 'text.php' , "Created By file_put_contents" );
  }
  else {
    chmod($File , 0755);
    file_put_contents($directory . 'text.php' ,"<?php echo 'Created By file_put_contents in';  ?>" );

}

include $File;
