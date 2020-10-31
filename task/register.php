<?php 
   session_start(); //put it in all page
   if(isset($_SESSION['username'])){ // if find session redierct me to home page
    header('location : home.php');

   }
   $noNavBar = '';
   include 'init.php';
  

?>
<?php
$con = mysqli_connect('127.0.0.1','root'.'');

if(!$con){ echo "Not Connect"; }

if (!mysqli_select_db($con,$users)){ echo 'Database Not Selected' ;}

$Name = $_POST['name'];
$Email = $_POST['email'];
$Pass = $_POST['password'];
$Gender = $_POST['gender'];

$sql  = "INSERT INTO task (Name,Email,Pass,Gender) VALUES ('$Name','$Email',$Pass,'$Gender')";

if(!mysqli_query($con,$sql))
{
    echo "Not Inserted";
}
else
{
    echo "inserted";
}
?>
<center>  <h4 class="text-center">Register</h4> </center>
<form class="Register" method="post" action = "<?php echo $_SERVER['PHP_SELF']?>">
   <label for="name">Name</label>
    <input type="text" name="name" class="form-control"/><br /> 
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control"/><br /> 
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control"/> <br /> 
    <label for="gender">Gender</label> <br />
    <input type="radio" name="gender" value="male"/>Male <br />
    <input type="radio" name="gender" value="female"/>Female <br >
    <? header('location: index.php');?>
    <input type="submit" class="btn btn-primary btn-block" name="submit" value="Register">
    <a class = "login" class="text-center" href ="index.php">Login</a>
</form> 
<?php include $tpl . 'footer.php'; ?>