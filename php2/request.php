<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
		<input type="text" name="name">
		<input type="password" name="password">
		<input type="submit" name="">
</form>
<?php

if($_SERVER['REQUEST_METHOD'] =='POST')
{
	echo "Kala7aaaaa";
}