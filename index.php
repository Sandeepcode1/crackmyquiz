<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="title" content="crackmyquiz - Test your knowledge with quizzes on GK, Math, Reasoning, Science and more">
  <meta name="description" content="crackmyquiz is a website that offers a variety of quizzes on general knowledge, math, reasoning, and more. Test your knowledge and challenge yourself with our challenging quizzes.">
  <meta name="keywords" content="quiz, general knowledge, math, reasoning, competitive exams">
  <meta name="author" content="CEO of crackmyquiz">
  <title>CrackMyQuiz - Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css"> 
  <style>
    /* add custom styles for mobile */
    @media screen and (max-width: 576px) {
      .card-body {
        font-size: 14px;
      }
      .form-check-label {
        margin-left: 15px;
      }
      .btn {
        font-size: 12px;
      }
      
    }


 
  </style>
</head>
<body>
<?php include 'navbar.php'; ?>
   <div class="card-deck" style="padding-top: 10px; margin:5px;">
  <div class="card">
  <a href="gkquiz.php">
    <img class="card-img-top" src="images/gkquizzz.png" alt="Card image cap">
  </a>
    <div class="card-body">
      <h5 class="card-title">General Knowledge</h5>
      <p class="card-text">Welcome to our General Knowledge Quiz! Test your knowledge on a variety of subjects including history, geography, science, and more..</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
<div class="card">
  <a href="mathquiz.php">
    <img class="card-img-top" src="images/science.jpg" alt="Card image cap">
  </a>
  <div class="card-body">
    <h5 class="card-title">Math Quiz</h5>
    <p class="card-text">Test your knowledge of mathematical concepts, equations, and problem-solving skills with our Math Quiz. Explore various topics like algebra, geometry, calculus, and more as you challenge yourself with intriguing math questions.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>

<div class="card">
  <a href="compquiz.php">
    <img class="card-img-top" src="images/quizzy.jpg" alt="Card image cap">
  </a>
  <div class="card-body">
    <h5 class="card-title">Computer Quiz</h5>
    <p class="card-text">Challenge your knowledge of computers, technology, and software with our Computer Quiz. Explore topics like computer hardware, programming languages, operating systems, and more as you test your expertise in the world of computing.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>

<div class="card-deck mt-4">
  <div class="card">
    <a href="historyquiz.php">
      <img class="card-img-top" src="images/history.png" alt="Card image cap">
    </a>
    <div class="card-body">
      <h5 class="card-title">History Quiz</h5>
      <p class="card-text">Test your knowledge of historical events, famous personalities, and important dates with our History Quiz. Explore different eras and civilizations as you challenge yourself with intriguing history questions.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <a href="sciencetechquiz.php">
      <img class="card-img-top" src="images/science.png" alt="Card image cap">
    </a>
    <div class="card-body">
      <h5 class="card-title">Science Quiz</h5>
      <p class="card-text">Expand your scientific knowledge with our Science Quiz. Explore various fields such as physics, biology, chemistry, and more as you answer intriguing questions and discover fascinating facts.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <a href="sportsquiz.php">
      <img class="card-img-top" src="images/sports.png" alt="Card image cap">
    </a>
    <div class="card-body">
      <h5 class="card-title">Sports Quiz</h5>
      <p class="card-text">Test your sports knowledge with our Sports Quiz. Challenge yourself with questions about various sports, athletes, championships, and memorable moments in the world of sports.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
  </div>
 
 <?php include 'footer.php'; ?>  


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/style.js"></script>
</body>

</html>
