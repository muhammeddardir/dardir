<?php
/*
cookie contain country , language ....
setcookie('name','value',expireation data,'PATH' , domain , secure , httponly) / mean all web site

Name     : name The cookie
value    : content The cookie
expir    : time() = current time + 3600 "1h" will deded after 1h from current time
Path     : put cookie in spcial page ; / --> put cookie in all page  
domain   : elzero.info
secure   : TRUE --> send cookie by HTTPS ,ssl
httponly : just pass http Request no js code scripts lang cant execu
*/

/*
if(count($_COOKIE)>0) //cheack brawser support cookie or no
{
		echo "COOKIES IS GOOD";
}
else
{
		echo "Sorry";
}
************************************************************************************************************ */
$mainColor = '#c05b5b';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$mainColor = $_POST['color']; //Get bg color from form

	setcookie('background',$mainColor,time()+8888888,'/' , TRUE ,TRUE);
// setcookie('background'," ",time()-8888888,'/' , TRUE ,TRUE); --> delete cookie
}
if (isset($_COOKIE['background'])) {
	
	$body = $_COOKIE['background']; //stor value in cookie 
}
else {
	
	$body = $mainColor;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: <?php echo $body; ?>">
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="color" name="color">
		<input type="submit" value="choose">
	</form>
</body>
</html>