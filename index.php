<?php 
   session_start(); //put it in all page
   if(isset($_SESSION['username'])){ // if find session redierct me to home page
    header('location : home.php');

   }
   $noNavBar = '';
   include 'init.php';
   include 'connect.php';
  

?>
<?php

// check if user comming HTTP Post

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $username       = $_POST['user'];
    $password       = $_POST['pass'];
}

// check if the user exist in database

   $stmt = $conn->prepare("SELECT Name, password From users where Name = ? AND password = ? ") ; //statment -- preper query // GroupID --> just admin login 
   
   $stmt-> execute(array($username , $password)); // to excute query
   


   // ifcount > 0 This Mean The Database Contain Record About This Username
      $count = $stmt->rowCount(); //count num of row
   if ($count > 0){
       $_SESSION['Usernamr'] = $username; //REgester session $_SESSION['SessionName'] = value
       header('location: home.php');
       exit();
   }
?>
<form class="login" action = "<?php echo $_SERVER['PHP_SELF']?>" method = "post" >
    <h4 class="text-center"> Login</h4>
        <input class="form-control" type="text" name="user" placeholder="userName" autocomplete="off" />
        <input class="form-control" type="password" name="pass" placeholder="password" autocomplete="new-password" />
        <input class="btn btn-primary btn-block" type="submit" value="Login" />
        <a class = "register" class="text-center" href ="register.php">Register</a>

    </form>



<?php include $tpl . 'footer.php'; ?>