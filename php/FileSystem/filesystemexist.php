<?php
/**
 * dirname($path);
 * dirname(__FILE__) == __dir__ //php 5.3.0
 * dirname(__FILE__,2) --> يرجع خطوتين
 */
echo dirname(__FILE__) . '<br />'. '<br / >'. '<br / >'. '<br / >'; // echo directory

echo __FILE__ . '<br / >'. '<br / >'. '<br / >'; // echo directory and file name

echo "<hr />" . "<br />";

$file = '/var/www/html/php/dardir.txt';

if (file_exists($file)){

    echo ' Good The File [' . $file . '] is found ' . '<br />'. '<br / >'. '<br / >';

    file_put_contents($file, 'added content by php file put content');
}
else{

    echo 'Sorry The File [' . $file . '] is NotFound But I created by php ' . '<br />'. '<br / >'. '<br / >';
    file_put_contents($file, 'created by php');

}

echo "<hr />" . "<br />";


echo "<hr />" . "<br />";


/**
 * is_writeable($file) alias is_writable($file) // to know we can write in file
 */

$file = '/var/www/html/php/dardir.txt';

if (is_writable($file)){

    echo ' Good The File [' . $file . '] we can write in it ' . '<br />'. '<br / >'. '<br / >';

    file_put_contents($file, 'added content by php file put content');
}
else{

    echo 'Sorry The File [' . $file . '] we cant write in it ' . '<br />'. '<br / >'. '<br / >';
    file_put_contents($file, 'created by php');

}
echo "<hr />" . "<br />";


echo system('ls') . '<br />';
echo "<hr />" . "<br />";

//include(__FILE__) . "/../inc/txt.php";