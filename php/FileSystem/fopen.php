<?php
/*
fopen(filename or "url", mode, include_path, context) 
Modes: 
r : Read Only Starting From Beginning Of The File [ File Must Be Exist] 
r+: Read & Write Starting From Beginning OF The File[ File Must Be Exist]
W : Write Only [ Open & Clear The Content ] + [ Create The File If Not Exist] 
W+: Write & Read [ Open & Clear The Content ]+ [ Create The File If Not Exist ] 
a : Write Only [ Open & Write To The End OF File ] + [Create The File If Not Exist ] 
a+: Write & Read [0pen & Write To The End Of File j + [ Create The File IF Not Exist1 
x : Write Only [Create A New File ] + [ File Must Not Be Exist Or Give Error ] 
X+: Write & Read [ Create A New File] + [ File Must Not Be Exist Or Give Error ] 

Handle Line End:
 Unix: \n 
 Windows: \rin 
 Mac: R 21 

 */ 
 $F1leHandle = fopen('dardir.txt', 'r+');
 
 /**
  * fread(Handle , length);
  */

  $read = fread($F1leHandle,filesize('dardir.txt'));
  echo  "original contient befor replace is : <br> " . $read;

  /**
   * fwrite(handel , string input , length of string input [defull all string])
   */

   $write = fwrite($F1leHandle,'dardir');
 /**
   * fseek(handel , offset 'index', whence [defull: SEEK_SET])
   * whence :
   * 1- SEEK_SET : change from index  // offset num 3
   * 2- SEEK_CUR : possition where i add num of index 
   * 3- SEEK_CUR : count from end    $seek = fseek ($F1leHandle,-6,SEEK_END);
   */

   $seek = fseek ($F1leHandle,2,SEEK_SET);
   $write = fwrite($F1leHandle,'d');

   fclose($F1leHandle);