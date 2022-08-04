<?php
  // CONNECTION
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = 'zaq12wsx';
  $db     = 'prana';
  $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db);

  if($mysqli->connect_errno ) {
     echo "Connect failed: .$mysqli->connect_error.<br />";
     exit();
  }


  // REGISTER
  if(ISSET($_POST['register'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    $sql = "INSERT INTO users (name, email, password) VALUES('$name', '$email', '$password')";

    if ($password == $cpassword) {
      mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
      header('location: login.php');
    }
  }

?>
