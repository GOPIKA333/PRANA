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
      <h1 class="mb-4">Sign Up</h1>
      <div class="card w-50" style="background: rgba(200,200,200,0.2)">
        <div class="row">
          <div class="col-md-4 card-left">

          </div>
          <div class="col-md-8 p-4">

            <form class="appointment-form row" action="registration.php" method="POST">
              <div class="form-field col-lg-6">
                 <input id="name" name="name" class="input-text js-input" type="text" placeholder="Name" required>
              </div>
              <div class="form-field col-lg-6">
                 <input id="email" name="email" class="input-text js-input" type="email" placeholder="Email" required>
              </div>
              <div class="form-field col-lg-6">
                 <input id="password" name="password" class="input-text js-input" type="password" placeholder="Password" required>
              </div>
              <div class="form-field col-lg-6">
                 <input id="cpassword" name="cpassword" class="input-text js-input" type="password" placeholder="Confirm Password" required>
              </div>
              <div class="form-field col-lg-12">
                 <button type="submit" name="register" class="btn submit-btn w-100">Sign Up</button>
              </div>
              <div class="form-field col-lg-12">
                 <a href="login.php" style="color: #fff; text-decoration: underline;">I am already a member</a>
              </div>
            </form>


          </div>
        </div>
      </div>
    </div>



  </section><!-- End Hero -->

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
          <li><a class="nav-link scrollto  active" href="login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-nav header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </header>

  <script type="text/javascript">
    $('.header').css('background', 'none');
    $('nav').css('display', 'none');
    $('.header-social-links').css('visibility', 'hidden');
    $('.logo').mouseenter(function() {
      $('.header').css('background', 'rgba(21, 5, 23, 0.25)');
      $('nav').css('display', 'block');
      $('.header-social-links').css('visibility', 'visible');
    });
    $('.logo').mouseleave(function() {
      $('header').mouseover(function() {
        $('.header').css('background', 'rgba(21, 5, 23, 0.25)');
        $('nav').css('display', 'block');
        $('.header-social-links').css('visibility', 'visible');
      });
      $('.header').css('background', 'none');
      $('nav').css('display', 'none');
      $('.header-social-links').css('visibility', 'hidden');
    });
    // $(document).ready(function() {
    //
    // });
  </script>
</body>
</html>
