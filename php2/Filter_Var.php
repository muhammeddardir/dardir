<?php
/*
filter_var(variable,FILTER_TYPE,options);

FILTER_TYPE :
search Type of fillter : https://www.php.net/manual/en/filter.filters.php <-----
						Validate filters
					    Sanitize filters
						Other filters
						Filter flags
						//filter_id  			//flag 
if(filter_var($input,FILTER_VALIDATE_INT , FILTER_FLAG_IPV4) !== FALSE){


*/

$input =$_POST['name'];

$filter = array(

		'Options' => array('min_range' => 1,'max_range' => 999  ),

		'Flags' => FILTER_FLAG_ALLOW_HEX, 
	);

if(filter_var($input,FILTER_VALIDATE_INT , $filter) !== FALSE){

		echo "The Good " . $input . " IS HEX";
}
else {
	echo "Sorry The " . $input . " isn't HEX";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Filter</title>
</head>
<body>
	<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
		<input type="text" name="name">
		<input type="submit" name="">
	</form>
</body>
</html>
<?php


/*

$input =$_POST['name'];

$snitize = filter_var($input,FILTER_SANITIZE_NUMBER_INT);

echo "main input" . $input;
echo "After Sentize" . $snitize;

if(filter_var($snitize, FILTER_VALIDATE_INT) !== FALSE){  // use Validate filters & Sanitize filters

		echo "The Good ";
}
else {
	echo "Sorry The ";
}












