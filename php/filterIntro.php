<?php
/*
Filter To

			user input
			cookie
			web server
			server variable
			DB query Result

*/

$string =$_POST['name'];
echo "$string";
echo filter_var($string,FILTER_SANITIZE_STRING);

foreach (filter_list() as $f) {    // echo filters
	echo $f . "<br>";
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