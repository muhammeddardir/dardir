<?php
include "init.php";
$photoName = $_FILES['upload']['name'];
$size      = $_FILES['upload']['size'];
$tmp       = $_FILES['upload']['tmp_name'];
$type      = $_FILES['upload']['type'];
// List of allaw extenstions
$Extension = array("jpeg","jpg","png","gif");
// Get Extensions
$photoExtensions = strtolower(end(explode(".","$photoName")));

// error Likely
if (!in_array($photoExtensions,$Extension && !empty($photoName) &&$size > 400000 )){

    echo "error Extensions";

}

// save photo

move_uploaded_file($tmp , "upload/" . $photoName);

// send to DB
$con = mysqli_connect('127.0.0.1','root'.'');

if(!$con){ echo "Not Connect"; }

if (!mysqli_select_db($con,$users)){ echo 'Database Not Selected' ;}


$sql  = "INSERT INTO task1 (photo) VALUES ('$photoName')";

if(!mysqli_query($con,$sql))
{
    echo "Not Inserted";
}
else
{
    echo "inserted";
}

?>
<div class = "up">
<form method = "post" action = "<?php echo $_SERVER['PHP_SELF']?>" ectype = "multipart/form-data" >
<div class = "form-group-form-group-lg">
<label class ="col-sm-2 control-label"> Upload Photo </label>
<div class = "col-sm-10 col-md-6">
<input type = "file" name = "upload" class = "form-control" required = "required" />
<input type = "submit" value = "upload" class = "btn btn-primary btm-lg"/>

</div>
</div>
</form>
</div>
<?php include $tpl . 'footer.php'; ?>