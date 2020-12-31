<?php
/*$_SERVER --> info about env work
*
*$_SERVER['PHP_SELF']; يبعتني لنفس الصفحه اللي انا فيها
*


?>
<a href ="<?php $_SERVER['PHP_SELF']; ?>">click</a>
*/

/*$_SERVER --> info about env work
*
*$_SERVER['SERVER_ADDR']; يبعتني لنفس الصفحه اللي انا فيها
*
echo $_SERVER['SERVER_ADDR']; to know ip server OUTPUT = 127.0.0.1
echo $_SERVER['SERVER_NAME']; to know name server OUTPUT = LocalHost
*/
echo $_SERVER['SERVER_ADDR'] . "<br />";
echo $_SERVER['SERVER_NAME'] . "<br />";
/**
 * echo $_SERVER['QUERY_STRING'];
 * http://127.0.0.1/php/server.php/?name=dad&age=12&skills=cdd
 * output = name=dad&age=12&skills=cdd
 */
/**
 * echo $_SERVER['HTTP_REFERER']; علشان اعرف اللنك جاي منين
 * output = http://127.0.0.1/php/referrer.php
 */
echo $_SERVER['HTTP_REFERER'] . "<br />";


echo $_SERVER['SERVER_PORT']. "<br />"; //to know open port 
//search in php doc about server