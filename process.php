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
    $_SESSION['userid']=$fetch['id'];
    header('location: home.php');
  }else{
    echo "<div class='alert alert-danger'>Invalid email or password</div>";
  }
}

if(ISSET($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobileno=$_POST['mobileno'];
  $age=$_POST['age'];
  $gender=$_POST['gender'];
  $doctor=$_POST['doctor'];
  $date=$_POST['date'];
  $slot=$_POST['slot'];
  $userid = $_SESSION['userid'];
  $sql = "INSERT INTO appointments ( user_id, name, age, gender, mobileno, email, doctor, appointment_date, slot, status) VALUES('$userid', '$name', '$age', '$gender', '$mobileno', '$email', '$doctor', '$date', '$slot', 0)";
  mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
  header('location: home.php');
}
 ?>
