<?php
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = 'zaq12wsx';
  $db     = 'prana';
  $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db);

  // REGISTER
  if(ISSET($_POST['add_doctor'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobileno=$_POST['mobileno'];
    $sql = "INSERT INTO doctors (name, mobileno, email) VALUES('$name', '$mobileno', '$email')";

    mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
  }
 ?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Prana</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/bootstrap.css">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" charset="utf-8"></script>

    <style media="screen">
      .card {
        z-index: 10;
        background: rgba(255, 255, 255, 0.9);
        padding: 15px 30px;
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
        transition: 0.3s;
        transition: ease-in-out 0.4s;
        border-radius: 5px;
        border: none;
      }

      .main-card {
        padding: 0;
        height: 300px;
        max-height: 300px !important;
        overflow: scroll;
      }

    </style>
  </head>
  <body>

		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active p-3">
				<a href="index.php" class="logo me-auto me-lg-0 mb-4 "><img src="../img/logo.png" alt="" class="img-fluid"></a>
        <ul class="list-unstyled components mb-5">
          <li class="mb-4 active">
            <a href=""><span class="fa fa-home"></span></a>
          </li>
          <li class="mb-4">
            <a href="#"><span class="fa-solid fa-user-doctor"></span></a>
          </li>
          <li class="mb-4">
            <a href="#"><span class="fa-solid fa-calendar-check"></span></a>
          </li>

          <li>
            <a href="logout.php" class="toggle-off"><span class="fa-solid fa-arrow-right-from-bracket"></span></a>
          </li>
        </ul>


    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <h2 class="mb-4">Admin Dashboard</h2>

        <div class="row">
          <div class="col-md-12">
            <div class="card mb-5">
              <h4>Add Doctor</h4>
              <form class="" action="" method="post">
                <div class="row">
                  <div class="col-md-3">
                    <input class="w-100" type="text" name="name" value="" placeholder="Name">
                  </div>
                  <div class="col-md-3">
                    <input class="w-100" type="text" name="mobileno" value="" placeholder="Mobile Number">
                  </div>
                  <div class="col-md-3">
                    <input class="w-100" type="text" name="email" value="" placeholder="Email">
                  </div>
                  <div class="col-md-2 ms-5">
                    <button type="submit" class="btn btn-dark w-100" name="add_doctor">Add</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <div class="card  main-card w-100">
              <h4>Doctors</h4>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Contact Email</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $query1 = mysqli_query($mysqli, "SELECT * FROM `doctors` ") or die(mysqli_error());
                  $row1 = mysqli_num_rows($query1);
                  for($x = 1; $x<= $row1; $x++){
                    $fetch1= mysqli_fetch_assoc($query1);
                   ?>
                   <tr>
                     <td><?php echo $fetch1['id']; ?></td>
                     <td><?php echo $fetch1['name']; ?></td>
                     <td><?php echo $fetch1['mobileno']; ?></td>
                     <td><?php echo $fetch1['email']; ?></td>
                   </tr>
                 <?php } ?>

               </tbody>
              </table>
            </div>
          </div>
          <div class="col-md-7">
            <div class="card  main-card w-100">
              <h4>Appointment requests</h4>
              <table class="table table-striped ">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Doctor</th>
                    <th scope="col">Date</th>
                    <th scope="col">Slot</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $query2 = mysqli_query($mysqli, "SELECT * FROM `appointments` WHERE `status`=0") or die(mysqli_error());
                  $row2 = mysqli_num_rows($query2);
                  for($x = 1; $x<= $row2; $x++){
                    $fetch2= mysqli_fetch_assoc($query2);
                   ?>
                   <tr>
                     <td><?php echo $fetch2['id']; ?></td>
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
                     <td> <form class="" action="process.php" method="post">
                       <button class="btn btn-dark" name="accept_request" value="<?php  echo $fetch2['id'];?>" type="submit" >Accept</button>
                     </form> </td>
                   </tr>
                 <?php } ?>


               </tbody>

              </table>
            </div>
          </div>
        </div>
      </div>
		</div>


    <script type="text/javascript">
    $(document).ready(function () {
      $('#doctor').DataTable();
    });
    </script>
  </body>
</html>
