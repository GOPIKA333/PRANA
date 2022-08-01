<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prana</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link href="../bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/main.css">
  <script type="text/javascript" src="../js/jquery.min.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../js/bootstrap.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@500&family=Kanit:wght@500&display=swap" rel="stylesheet">
  <style media="screen">
        section{
            height: 100vh;
            margin-bottom: -70px;
            padding: 0;
        }
        .left-section {
          background: url("../img/bg.jpeg") top center;
          background-size: cover;
          position: relative;
          color: #000;
        }
        .left-section:after {
          content: "";
          background:   linear-gradient(rgba(26, 0, 33, 0.5) 0%, rgba(26, 0, 33, 0.5) 5%, rgba(38, 6, 51, 0.5) 40%, rgba(147, 47, 69, 0.7) 76%, rgba(236, 97, 93, 0.7) 94%, rgba(236, 97, 93, 0.5) 100%) repeat scroll 0% 0%;
          position: absolute;
          bottom: 0;
          top: 0;
          left: 0;
          right: 0;
        }

        .left-section h1 {
          bottom: 0;
          background: #000;
          /* background: linear-gradient(to right, #FFFFFF 0%, #000000 37%); */
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;

        }
        .title {
          margin-top: 6.2em;
          margin-left: 1em;
          font-size: 5em;
          letter-spacing: 1em;
          font-family: 'IBM Plex Serif', serif;
          font-family: 'Kanit', sans-serif;
        }
        .logo {
          width: 60px;
          height: 60px;
        }
        input {
          color: rgba(26, 0, 33, 0.8) !important;
          border-color: rgba(26, 0, 33, 0.8) !important;
        }
        .title-m {
          background: rgba(26, 0, 33, 0.8);
          background: linear-gradient(rgba(26, 0, 33, 0.5) 0%, rgba(26, 0, 33, 0.5) 5%, rgba(38, 6, 51, 0.5) 40%, rgba(147, 47, 69, 0.7) 76%, rgba(236, 97, 93, 0.7) 94%, rgba(236, 97, 93, 0.5) 100%) repeat scroll 0% 0%;;
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
        }
        .submit-btn {
          background: rgba(26, 0, 33, 0.8) !important;
          /* background: linear-gradient(rgba(26, 0, 33, 0.5) 0%, rgba(26, 0, 33, 0.5) 5%, rgba(38, 6, 51, 0.5) 40%, rgba(147, 47, 69, 0.7) 76%, rgba(236, 97, 93, 0.7) 94%, rgba(236, 97, 93, 0.5) 100%) repeat scroll 0% 0% !im; */
        }
  </style>
</head>
<body class="h-100">
  <!-- ======= Hero Section ======= -->
  <section>
    <div class="row h-100">
      <div class="col-md-7 left-section h-100 p-5">
        <!-- <h1 style="letter-spacing:0.5em">WELCOME TO THE ADMIN PANEL OF</h1> -->
        <h1 class="title">PRANA</h1>
      </div>
      <div class="col-md-5">
        <div class="container py-5 text-center">
          <h1 class="mb-4 mt-5 title-m">Login</h1>
          <div class="row w-75 mx-auto">
            <div class="col-md-12 p-4">

              <form class="appointment-form row" action="process.php" method="post">
                <div class="form-field col-lg-12">
                   <input id="name" name="username" class="input-text js-input" type="text" placeholder="Name" required>
                </div>
                <div class="form-field col-lg-12">
                   <input id="name" name="password" class="input-text js-input" type="password" placeholder="Password" required>
                </div>
                <div class="form-field col-lg-12 mt-5">
                   <button type="submit" name="login" class="btn submit-btn w-100">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center ">
    <div class="container-fluid d-flex align-items-center justify-content-lg-between">

      <!-- <h1 class="logo me-auto me-lg-0"><a href="index.html">Valera</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="../index.php" class="logo me-auto me-lg-0"><img src="../img/logo.png" alt="" style="max-height: 60px !important;width: 60px !important;" class="img-fluid"></a>

    </div>
  </header>

  <script type="text/javascript">
    $('.header').css('background', 'none');
    $('nav').css('display', 'none');
    $('.header-social-links').css('visibility', 'hidden');
  </script>
</body>
</html>
