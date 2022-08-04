<?php
  session_start();
  if(!ISSET($_SESSION['user_name'])){
    header('location: index.php');
  }

  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = 'zaq12wsx';
  $db     = 'prana';
  $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db);
  $date = date('Y-m-d');

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
  <script type="text/javascript" src="js/jquery.min.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <style media="screen">
  .main-card {
    background: rgba(21, 5, 23, 0.5) linear-gradient(rgba(26, 0, 33, 0.5) 0%, rgba(26, 0, 33, 0.5) 5%, rgba(38, 6, 51, 0.5) 40%, rgba(147, 47, 69, 0.7) 76%, rgba(236, 97, 93, 0.7) 94%, rgba(236, 97, 93, 0.5) 100%) repeat scroll 0% 0%;
    color: #fff;
    border: none;
    box-shadow: 1px 1px 15px rgba(21, 5, 23, 0.5);
    min-height: 22em;
    max-height: 22em;
  }
  .main-card .table {
    color: #fff;
  }
  </style>
</head>
<body class="h-100">
  <!-- ======= Hero Section ======= -->
  <section id="services" class="services">
    <div class="container">
      <div class="section-title m-0">
        <h2>Home</h2>
      </div>
      <div class="row w-100">
        <div class="col-md-6">
          <div class="card appointments main-card w-100">
            <div class="card-header">
              <h4 class="p-2 text-center">Appointments</h4>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Contact Number</th>
                  <th scope="col">Doctor</th>
                  <th scope="col">Date</th>
                  <th scope="col">Slot</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query2 = mysqli_query($mysqli, "SELECT * FROM `appointments`") or die(mysqli_error());
                $row2 = mysqli_num_rows($query2);
                $i = 0;
                for($x = 1; $x<= $row2; $x++){
                  $fetch2= mysqli_fetch_assoc($query2);
                  if ($fetch2['appointment_date']>=$date) {
                    $i+=1;
                 ?>
                 <tr>
                   <td><?php echo $i; ?></td>
                   <td><?php echo $fetch2['name']; ?></td>
                   <td><?php echo $fetch2['mobileno']; ?></td>
                   <td><?php
                     $doc_id = $fetch2['doctor'];
                     $doctor = mysqli_query($mysqli, "SELECT * FROM `doctors` WHERE `id`='$doc_id'") or die(mysqli_error());
                     $doc_fetch=mysqli_fetch_array($doctor);
                     echo $doc_fetch['name'];
                    ?></td>
                   <td><?php  echo $fetch2['appointment_date']; ?></td>
                   <td><?php echo $fetch2['slot']; ?></td>
                 </tr>
               <?php } } ?>


             </tbody>

            </table>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card appointments main-card w-100">
            <div class="card-header">
              <h4 class="p-2 text-center">Previous Appointments</h4>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Contact Number</th>
                  <th scope="col">Doctor</th>
                  <th scope="col">Date</th>
                  <th scope="col">Slot</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query2 = mysqli_query($mysqli, "SELECT * FROM `appointments`") or die(mysqli_error());
                $row2 = mysqli_num_rows($query2);
                $i = 0;
                for($x = 1; $x<= $row2; $x++){
                  $fetch2= mysqli_fetch_assoc($query2);
                  if ($fetch2['appointment_date']<$date) {
                    $i+=1;
                 ?>
                 <tr>
                   <td><?php echo $i; ?></td>
                   <td><?php echo $fetch2['name']; ?></td>
                   <td><?php echo $fetch2['mobileno']; ?></td>
                   <td><?php
                     $doc_id = $fetch2['doctor'];
                     $doctor = mysqli_query($mysqli, "SELECT * FROM `doctors` WHERE `id`='$doc_id'") or die(mysqli_error());
                     $doc_fetch=mysqli_fetch_array($doctor);
                     echo $doc_fetch['name'];
                    ?></td>
                   <td><?php echo $fetch2['appointment_date']; ?></td>
                   <td><?php echo $fetch2['slot']; ?></td>

                 </tr>
               <?php } }?>


             </tbody>

            </table>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->


  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center " style="background: rgba(21, 5, 23, 0.5) linear-gradient(rgba(26, 0, 33, 0.5) 0%, rgba(26, 0, 33, 0.5) 5%, rgba(38, 6, 51, 0.5) 40%, rgba(147, 47, 69, 0.7) 76%, rgba(236, 97, 93, 0.7) 94%, rgba(236, 97, 93, 0.5) 100%) repeat scroll 0% 0%;">
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
  <script type="text/javascript">


  </script>

</body>
</html>
