<?php
/**
 * file_get_contents(path,include_path,context,offset,max_length);
 */

file_get_contents('url');
$file = file_get_contents('read.txt',false,NULL,10,5);

file_put_contents('write.txt',$file);
