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
        </ul>

        <div class="footer">
        	<p>
					  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
					</p>
        </div>
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
                  $table = 'doctors';
                  $result = mysqli_query("SELECT * FROM {$table}");
                  $row = mysqli_fetch_array($result);
                  echo '<tr><td>'.$row['id'].'</td></tr>';

                   ?>


               </tbody>
              </table>
            </div>
          </div>
          <div class="col-md-7">
            <div class="card  main-card w-100">
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
