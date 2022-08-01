<?php
// CONNECTION
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'zaq12wsx';
$db     = 'prana';
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db);

session_start();
// LOGIN
if(ISSET($_POST['login'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `email`='$email' && `password`='$password'") or die(mysqli_error());
  $fetch=mysqli_fetch_array($query);
  $count=mysqli_num_rows($query);
  
  if($count > 0){
    $_SESSION['user_name']=$fetch['name'];
    // header('location: home.php');
  }else{
    echo "<div class='alert alert-danger'>Invalid email or password</div>";
  }
}
 ?>
