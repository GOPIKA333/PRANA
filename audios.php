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
  <style media="screen">
    .services{
    	background-color: rgba(236, 97, 93, 0.1);
    	font-family: "Fira Sans", Helvetica, Arial, sans-serif;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }
  </style>
</head>
<body class="h-100">

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container ">

      <div class="section-title">
        <h2>Calming Audios</h2>
        <p>Meditation has many benefits. It reduces stress, increases calm and focus, and promotes greater physical and emotional well-being. Anyone can do it, and the rewards can come quickly. These guided meditations will help you get started.</p>
      </div>

      <div class="player w-50 mx-auto ">
      	<div id="info" class="info">
      		<span class="artist">Flume</span>
      		<span class="name">Say it</span>
      		<div class="progress-bar">
      			<div class="bar"></div>
      		</div>
      	</div>
      	<div id="control-panel" class="control-panel w-100">
      		<div class="album-art"></div>
      		<div class="controls">
      			<div id="prev" class="prev"></div>
      			<div id="play" class="play"></div>
            <div id="pause" class="pause"></div>
      			<div id="next" class="next"></div>
      		</div>
      	</div>
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
          <li><a class="nav-link scrollto  active" href="services.php">Services</a></li>
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

  <script type="text/javascript">
    // console.clear();
    let audios = [new Audio('audios/m1.mp3'), new Audio('audios/m2.mp3'), new Audio('audios/m3.mp3')];
    let isOn = 0;
    class musicPlayer {

      constructor() {
        this.audio = audios[0];
        this.play = this.play.bind(this);
        this.playBtn = document.getElementById('play');
        this.playBtn.addEventListener('click', this.play);

        this.next = this.next.bind(this);
        this.nextBtn = document.getElementById('next');
        this.nextBtn.addEventListener('click', this.next);


        this.prev = this.prev.bind(this);
        this.prevBtn = document.getElementById('prev');
        this.prevBtn.addEventListener('click', this.prev);


        this.controlPanel = document.getElementById('control-panel');
        this.infoBar = document.getElementById('info');
      }

      play() {
        // isOn == 0 ? this.audio.play() : this.audio.pause();
        // isOn = isOn !== 1 ? 1 : 0;
        let controlPanelObj = this.controlPanel,
        infoBarObj = this.infoBar,
        audio = this.audio
        Array.from(controlPanelObj.classList).find(function(element){
              return element !== "active" ? controlPanelObj.classList.add('active') : 		controlPanelObj.classList.remove('active');
          });
          Array.from(controlPanelObj.classList).find(function(element){
                element !== "active" ? audio.pause() : audio.play();
            });
        Array.from(infoBarObj.classList).find(function(element){
              return element !== "active" ? infoBarObj.classList.add('active') : 		infoBarObj.classList.remove('active');
          });

      }

      next() {

        let  next = this.nextBtn,
        audio = this.audio,
        index = audios.indexOf(audio),
        max = audios.length;
        next.dataset.clicked = "true";
        audio = (index>=0 || index<= max) ? audios[index+1]: '';

      }

      prev() {
        let  prev = this.prevBtn,
        audio = this.audio,
        index = audios.indexOf(audio);
        prev.dataset.clicked = "true";
        return audios[index-1];
      }
    }


    const newMusicplayer = new musicPlayer();
  </script>
</body>
</html>

<?php
  require 'connection.php';
?>
