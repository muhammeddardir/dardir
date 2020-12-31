<?php
/*
uniqid(prefix , more_entropy);

more_entropy == TRUE --> add 10 char  in 13 char


*/

$random = uniqid();

echo $random . "<br />";

var_dump($random);

/*
OUTPUT ==

5fec82dbbbb1f
string(13) "5fec82dbbbb1f" 

*/

$rand = uniqid("dardir");

echo $rand . "<br />";

var_dump($rand);

/*
OUTPUT ==

dardir5fec83d182d9d
string(19) "dardir5fec83d182d9d" 

*/