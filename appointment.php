<?php
  session_start();
  if(!ISSET($_SESSION['user_name'])){
    header('location: login.php');
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
        <form class="appointment-form row">
      <div class="form-field col-lg-6">
         <input id="name" class="input-text js-input" type="text" placeholder="Name" required>
         <!-- <label class="label" for="name">Name</label> -->
      </div>
      <div class="form-field col-lg-3 ">
         <input id="email" class="input-text js-input" type="email" placeholder="Age" required>
         <!-- <label class="label" for="email">Age</label> -->
      </div>
      <div class="form-field col-lg-3 ">
         <input id="email" class="input-text js-input" type="email" placeholder="Gender" required>
         <!-- <label class="label" for="email">Gender</label> -->
      </div>
      <div class="form-field col-lg-6 ">
         <input id="company" class="input-text js-input" type="text" placeholder="Contact number" required>
         <!-- <label class="label" for="company">Contact number</label> -->
      </div>
       <div class="form-field col-lg-6 ">
         <input id="phone" class="input-text js-input" type="text" placeholder="Contact Email" required>
         <!-- <label class="label" for="phone">Contact Email</label> -->
      </div>
      <div class="form-field col-lg-6">
        <select class="input-text js-input custom-select" placeholder="Doctor" required>
          <option selected disabled>Choose Doctor</option>
          <option>Lachs-Carpaccio</option>
          <option>Pizza</option>
        </select>

      </div>
      <div class="form-field col-lg-3 ">
         <input id="date" class="input-text js-input" type="date" placeholder="Date" required>
      </div>
      <div class="form-field col-lg-3 ">
        <select class="input-text js-input custom-select" placeholder="Time Slot" required>
          <option selected disabled>Select Time Slot</option>
          <option value=""></option>
        </select>
      </div>
      <div class="form-field col-lg-12">
         <input class="submit-btn" type="submit" value="Submit">
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
