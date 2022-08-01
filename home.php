<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prana</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link href="bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
  <script type="text/javascript" src="js/jquery.min.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <style media="screen">
  .card-left{
            background-image:url(img/bg.jpeg);
            text-align: center;
            background-size:cover;
            opacity: 0.5;
            padding: 0;
            /* margin: 0; */

        }
  </style>
</head>
<body class="h-100">
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="h-100">
    <div class="hero-container">

    </div>
  </section><!-- End Hero -->

  <?php
    session_start();
    if(!ISSET($_SESSION['user_name'])){
      header('location: index.php');
    }

  ?>
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center ">
    <div class="container-fluid d-flex align-items-center justify-content-lg-between">

      <!-- <h1 class="logo me-auto me-lg-0"><a href="index.html">Valera</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.php" class="logo me-auto me-lg-0"><img src="img/logo.png" alt="" class="img-fluid"></a>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php">About</a></li>
          <li><a class="nav-link scrollto" href="services.php">Services</a></li>
          <li><a class="nav-link scrollto" href="doctors.php">Our Doctors</a></li>
          <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
          <li><a class="nav-link scrollto  active" href="home.php"><?php echo $_SESSION['user_name'] ?></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-nav header-social-links d-flex align-items-center">
        <a href="logout.php" class="toggle-off"><i class="bi bi-box-arrow-right text-weight-bolder" style="font-size:1.5em"></i></a>
        <!-- <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a> -->
      </div>
    </div>
  </header>


</body>
</html>
