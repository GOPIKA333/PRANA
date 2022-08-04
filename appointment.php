<?php
  session_start();

  // Head to login if session variable is not set
  if(!ISSET($_SESSION['user_name'])){
    header('location: login.php');
  }

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
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prana</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link href="bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
  <style media="screen">
    .custom-select {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;

    }
  </style>
</head>
<body class="h-100">
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="h-100">
    <div class="hero-container">
      <h1>Schedule Appointment</h1>
      <div class="appointment">
        <form class="appointment-form row" action="process.php" method="post">
      <div class="form-field col-lg-6">
         <input id="name" name="name" class="input-text js-input" type="text" placeholder="Name" required>
         <!-- <label class="label" for="name">Name</label> -->
      </div>
      <div class="form-field col-lg-3 ">
         <input id="age" name="age" class="input-text js-input" type="text" placeholder="Age" required>
         <!-- <label class="label" for="email">Age</label> -->
      </div>
      <div class="form-field col-lg-3 ">
        <select name="gender" class="input-text js-input custom-select" placeholder="Gender" required>
          <option selected disabled>Select Gender</option>
          <option value="Female">Female</option>
          <option value="Male">Male</option>
          <option value="Rather not say">Rather not say</option>
        </select>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="mobileno" name="mobileno" class="input-text js-input" type="text" placeholder="Contact number" required>
         <!-- <label class="label" for="company">Contact number</label> -->
      </div>
       <div class="form-field col-lg-6 ">
         <input id="email" name="email" class="input-text js-input" type="email" placeholder="Contact Email" required>
         <!-- <label class="label" for="phone">Contact Email</label> -->
      </div>
      <div class="form-field col-lg-6">
        <select  name="doctor" class="input-text js-input custom-select" placeholder="Doctor" required>
          <option selected disabled>Choose Doctor</option>
          <?php
          $query = mysqli_query($mysqli, "SELECT * FROM `doctors` ") or die(mysqli_error());
          $row = mysqli_num_rows($query);
          for($x = 1; $x<= $row; $x++){
            $fetch= mysqli_fetch_assoc($query);
           ?>
           <option value="<?php echo $fetch['id']; ?>"><?php echo $fetch['name']; ?></option>
         <?php } ?>
        </select>

      </div>
      <div class="form-field col-lg-3 ">
         <input id="date" name="date" class="input-text js-input" type="date" placeholder="Date" required>
      </div>
      <div class="form-field col-lg-3 ">
        <select name="slot" class="input-text js-input custom-select" placeholder="Time Slot" required>
          <option selected disabled>Select Time Slot</option>
          <option value="1">9:30am to 10:30am</option>
          <option value="2">10:30am to 11:30am</option>
          <option value="3">12:00pm to 1:00pm</option>
          <option value="4">2:00pm to 3:00pm</option>
          <option value="5">3:00pm to 4:00pm</option>
        </select>
      </div>
      <div class="form-field col-lg-12">
         <input class="submit-btn" type="submit" name="submit" value="Submit">
      </div>
   </form>
      </div>
      <!-- <a href="appointment.php" class="btn-get-started scrollto">Book an Appointment</a> -->
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center ">
    <div class="container-fluid d-flex align-items-center justify-content-lg-between">

      <!-- <h1 class="logo me-auto me-lg-0"><a href="index.html">Valera</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo me-auto me-lg-0"><img src="img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php">About</a></li>
          <li><a class="nav-link scrollto active" href="services.php">Services</a></li>
          <li><a class="nav-link scrollto" href="doctors.php">Our Doctors</a></li>
          <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
          <?php if(!ISSET($_SESSION['user_name'])){ ?>
            <li><a class="nav-link scrollto" href="login.php">Login</a></li>
          <?php }
          else { ?>
            <li><a class="nav-link scrollto" href="home.php"><?php echo $_SESSION['user_name']; ?></a></li>
          <?php } ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->
</body>
</html>

<?php
// ADD APPOINTMENT
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

  $sql = "INSERT INTO appointments (user_id, name, age, gender, mobileno, email, doctor, appointment_date, slot, status) VALUES($userid, $name, $age, $gender, $mobileno, $email, $doctor, $date, $slot, 0)";
    mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
}
 ?>
