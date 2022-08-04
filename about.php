<?php
  session_start();
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

</head>
<body class="h-100">
  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">
      <div class="section-title">
        <h2>About <span>Us</span> </h2>
      </div>

      <div class="row content">
        <div class="col-lg-6">
          <p>
            Highly qualified team of some of the best names in psychology who deliver improved well-being to you. Trained and experienced in all psychotherapy techniques.
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> English And All Regional Indian Languages</li>
            <li><i class="ri-check-double-line"></i> Verified experts</li>
            <li><i class="ri-check-double-line"></i> Track your mental status</li>
          </ul>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <p>
            Highly qualified team of some of the best names in psychology who deliver improved well-being to you. Trained and experienced in all psychotherapy techniques.
          </p>
          <a href="#" class="btn-learn-more">Learn More</a>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container">

      <div class="row counters">

        <div class="col-lg-4 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter">232</span>
          <p>Clients</p>
        </div>

        <div class="col-lg-4 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter">12</span>
          <p>Doctors</p>
        </div>

        <div class="col-lg-4 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter">1463</span>
          <p>Hours Of Support</p>
        </div>

        <!-- <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter">15</span>
          <p></p>
        </div> -->

      </div>

    </div>
  </section><!-- End Counts Section -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center " style="background: rgba(21, 5, 23, 0.5) linear-gradient(rgba(26, 0, 33, 0.5) 0%, rgba(26, 0, 33, 0.5) 5%, rgba(38, 6, 51, 0.5) 40%, rgba(147, 47, 69, 0.7) 76%, rgba(236, 97, 93, 0.7) 94%, rgba(236, 97, 93, 0.5) 100%) repeat scroll 0% 0%;">
    <div class="container-fluid d-flex align-items-center justify-content-lg-between">

      <!-- <h1 class="logo me-auto me-lg-0"><a href="index.html">Valera</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo me-auto me-lg-0"><img src="img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto  active" href="about.php">About</a></li>
          <li><a class="nav-link scrollto" href="services.php">Services</a></li>
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
  require 'connection.php';
?>
