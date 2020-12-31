<?php

 /**
  * file_put_contents(Path , "content" , mode [optional] , context [optional]);
  *mode :
  * --> file_append-- to add new content on old content
  * --> lock_ex -- privent anthoer to edit file with me
  * --> file_use_include_path
  * if fileName.extenstion just will put content
  * if fileName.extenstion not find create it and put content
  * if in fileName.extenstion old content will remove it and put new content
  */

  file_put_contents($directory . 'text.php' , "Created By file_put_contents" , file_append | lock_ex);
  
