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
  <script src="js/jquery.min.js" charset="utf-8"></script>
  <style media="screen">
    .services{
      padding: 20px 0;
    	background-color: rgba(0,0,0, 0.05);
    	font-family: "Fira Sans", Helvetica, Arial, sans-serif;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    .quiz-container {
        background-color: #fff;
        border-radius: 2%;
        box-shadow: 0 0 10px 2px rgba(100, 100, 100, 0.1);
        width: 37.5rem;
        overflow: hidden;
    }

    .quiz-header {
        padding: 1rem;
    }

    h2 {
        padding: 1rem;
        text-align: center;
        margin: 0;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    ul li {
        font-size: 1.2rem;
        margin: 1rem 0;
    }

    ul li label {
        cursor: pointer;
    }

    /* button {
        background-color: #33a1eb;
        border: none;
        color: #fff;
        display: block;
        width: 100%;
        cursor: pointer;
        font-size: 1.1rem;
        font-family: inherit;
        padding: 1.3rem;
    }

    button:hover {
        background-color: #3c8ae3;
    }

    button:focus {
        outline: none;
        background-color: #3c8ae3;
    } */

    .submit-btn {
      background: #ff7f5d;
      border: 0;
      padding: 10px 24px;
      color: #fff;
      transition: 0.4s;
      border-radius: 4px;
    }

    .submit-btn:hover {
      background: #ff9377;
    }
    .quiz-container {
      overflow-y: scroll;
      min-height: 380px;
      max-height: 380px;
    }
  </style>
</head>
<body class="h-100">

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container ">

      <div class="section-title">
        <h2>Status Tracker</h2>
        <p>Choose anwers to the questions to determine your mental stability</p>
      </div>

      <div class="quiz-container mx-auto" id="quiz">
    <div class="quiz-header">
        <h2 id="question">Question text</h2>
        <ul>
            <li>
                <input type="radio" name="answer" id="a" class="answer">
                <label for="a" id="a_text"> Question</label>
            </li>
            <li>
                <input type="radio" name="answer" id="b" class="answer">
                <label for="b" id="b_text"> Question</label>
            </li>
            <li>
                <input type="radio" name="answer" id="c" class="answer">
                <label for="c" id="c_text"> Question</label>
            </li>
            <li>
                <input type="radio" name="answer" id="d" class="answer">
                <label for="d" id="d_text"> Question</label>
            </li>
        </ul>
    </div>
    <button id="submit" class="btn submit-btn w-100">Next</button>
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
  const quizData = [{
  question: "Feeling down, depressed or hopeless?",
  a: "Not at all",
  b: "Several days",
  c: "More than half the days",
  d: "Nearly every day",

  }, {
  question: "Little interest or pleasure in doing things?",
  a: "Not at all",
  b: "Several days",
  c: "More than half the days",
  d: "Nearly every day",

  }, {
  question: "Trouble falling/staying asleep, sleeping too much?",
  a: "Not at all",
  b: "Several days",
  c: "More than half the days",
  d: "Nearly every day",

  }, {
  question: "Poor appetite or overeating?",
  a: "Not at all",
  b: "Several days",
  c: "More than half the days",
  d: "Nearly every day",

  }, {
  question: "Feeling bad about yourself or that you are a failure or have let yourself or your family down?",
  a: "Not at all",
  b: "Several days",
  c: "More than half the days",
  d: "Nearly every day",

}, {
question: "Trouble concentrating on things, such as reading the newspaper or watching television?",
a: "Not at all",
b: "Several days",
c: "More than half the days",
d: "Nearly every day",
}, {
question: "Moving or speaking so slowly that other people could have noticed. Or the opposite; being so fidgety or restless that you have been moving around a lot more than usual?",
a: "Not at all",
b: "Several days",
c: "More than half the days",
d: "Nearly every day",
},{
question: "Thoughts that you would be better off dead or of hurting yourself in some way?",
a: "Not at all",
b: "Several days",
c: "More than half the days",
d: "Nearly every day",
}, {
question: "Tension: Feelings of tension, fatigability, startle response, moved to tears easily, trembling, feelings of restlessness, inability to relax?",
a: "Not at all",
b: "Several days",
c: "More than half the days",
d: "Nearly every day",
}, {
question: "Fears: Of dark, of strangers, of being left alone, of animals, of traffic, of crowds?",
a: "Not at all",
b: "Several days",
c: "More than half the days",
d: "Nearly every day",
}
  ];

  const quiz = document.getElementById('quiz');
  const answerEls = document.querySelectorAll('.answer');
  const questionEl = document.getElementById('question');
  const a_text = document.getElementById('a_text');
  const b_text = document.getElementById('b_text');
  const c_text = document.getElementById('c_text');
  const d_text = document.getElementById('d_text');
  const submitBtn = document.getElementById('submit');

  let currentQuiz = 0;
  let score = 0;

  loadQuiz();

  function loadQuiz(){
  deselectAnswer();

  const currentQuizData = quizData[currentQuiz];

  questionEl.innerText = currentQuizData.question;
  a_text.innerText = currentQuizData.a;
  b_text.innerText = currentQuizData.b;
  c_text.innerText = currentQuizData.c;
  d_text.innerText = currentQuizData.d;
  }

  function deselectAnswer() {
  answerEls.forEach(answerEl => answerEl.checked = false);
  }

  function getSelected() {
  let answer;

  answerEls.forEach(answerEl => {
  if(answerEl.checked) {
  answer = answerEl.id;
  }
  });

  return answer;
  }

  submitBtn.addEventListener('click', () => {
  const answer = getSelected();

  if(answer) {
    if(answer === 'a') {
      score+=1;
    }
    else if(answer === 'b') {
      score+=2;
    }
    else if(answer === 'c') {
      score+=3;
    }
    else if(answer === 'd'){
      score+=4;
    }


  currentQuiz++;
  console.log($(score));
  if(currentQuiz < quizData.length){ loadQuiz(); } else {
        if ($(score)[0]>=10 && $(score)[0]<=20) {
          quiz.innerHTML=` <h2> It seems like you are happy and enjoying your life!</h2> <button class="btn btn-dark" onclick="location.reload()">
              Reload
          </button>`;
        }
        else if ($(score)[0]>20 && $(score)[0]<=30) {
          quiz.innerHTML=` <h2> Hmm! Feel free to contact us if you need any help.</h2> <button class="btn btn-dark" onclick="location.reload()">
              Reload
          </button>`;
        }
        else if ($(score)[0]>30 && $(score)[0]<=40) {
          quiz.innerHTML=` <h2> It feels like you are depressed. Don't worry, our team is always ready to help you.</h2> <button class="btn submit-btn w-25 mx-auto" onclick="location.reload()">
              Reload
          </button>`;
        }
      }
      }
      })
  </script>
</body>
</html>

<?php
  require 'connection.php';
?>
