<?php
/**
 * dirname(path); //Returns a parent directory's path
 * echo __DIR__ . "/../file.txt" ; //php 5.3.0
 * echo dirname(__FILE__,2); //back two  step and echo path
 * 
 */

 echo dirname(__FILE__) . "<br/>"; // find dir

 echo __FILE__ . "<br/>"; //find dir and file name

 echo "<br/>" . "<hr>" ;

/**
 * basename(path,suffix"extintion[optional]); //get file Name
 */

echo "your File Name " . basename(__FILE__, '.php');