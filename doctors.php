<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'zaq12wsx';
$db     = 'prana';
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db);


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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script type="text/javascript" src="js/jquery.min.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script src="js/main.js" charset="utf-8"></script>

  <style media="screen">
    .services{
      padding: 20px 0;
    	font-family: "Fira Sans", Helvetica, Arial, sans-serif;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;

    }
    .container {
      max-height: 500px;
      overflow-y: scroll;
    }
  </style>
</head>
<body class="h-100">

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container mt-5">
      <div class="section-title">
        <h2>Our Doctors</h2>
      </div>
      <div class="row">
        <?php
        $query1 = mysqli_query($mysqli, "SELECT * FROM `doctors` ") or die(mysqli_error());
        $row1 = mysqli_num_rows($query1);
        for($x = 1; $x<= $row1; $x++){
          $fetch1= mysqli_fetch_assoc($query1);
         ?>
         <div class="col-lg-4 col-md-6">
           <div class="icon-box">
             <div class="icon"><i class="fa-solid fa-user-doctor" style="color: #ff689b;"></i></div>
             <h4 class="title"><a href="audios.php"><?php echo $fetch1['name']; ?></a></h4>
             <p class="description">Contact Number : <?php echo $fetch1['mobileno']; ?></p>
             <p class="description">Contact Email : <?php echo $fetch1['email']; ?></p>
           </div>
         </div>
         <!-- <tr>
           <td><?php echo $fetch1['id']; ?></td>
           <td><?php echo $fetch1['name']; ?></td>
           <td><?php echo $fetch1['mobileno']; ?></td>
           <td><?php echo $fetch1['email']; ?></td>
         </tr> -->
       <?php } ?>


      </div>
    </div>
  </section><!-- End Services Section -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center " style="background: rgba(21, 5, 23, 0.5) linear-gradient(rgba(26, 0, 33, 0.5) 0%, rgba(26, 0, 33, 0.5) 5%, rgba(38, 6, 51, 0.5) 40%, rgba(147, 47, 69, 0.7) 76%, rgba(236, 97, 93, 0.7) 94%, rgba(236, 97, 93, 0.5) 100%) repeat scroll 0% 0%;">
    <div class="container-fluid d-flex align-items-center justify-content-lg-between">

      <!-- <h1 class="logo me-auto me-lg-0"><a href="index.html">Valera</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo me-auto me-lg-0"><img src="img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php">About</a></li>
          <li><a class="nav-link scrollto" href="services.php">Services</a></li>
          <li><a class="nav-link scrollto  active" href="doctors.php">Our Doctors</a></li>
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
  <script type="text/javascript">

  </script>
</body>
</html>

<?php
  require 'connection.php';
?>
