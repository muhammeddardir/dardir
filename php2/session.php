<?php
/* session stor all data in var and use it in all web pae
session and cookies put in top file under php tag <?php

*/
session_start();  //start session or resume 


$users = array("muhammed:11111","mahmoud:22222","dardir:33333","hussen:44444");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	foreach ($users as $user) {
			
		$cred_user = explode(":", $user)[0];
		$cred_pass = explode(":", $user)[1];
     
		$user = $_POST['username'];
		$pass = $_POST['password'];

if ($user == $cred_user && $pass == $cred_pass) {
		 
			 $_SESSION['username'] = $user;

			 echo "successfull login";
			 exit();
	}
	
}


}







