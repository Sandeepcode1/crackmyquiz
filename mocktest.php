<!DOCTYPE html>
<html>
<head>
  <title>Mock Test - General Knowledge</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    .question {
      margin-bottom: 10px;
    }
    .score {
      font-weight: bold;
      background-color: #f5f5f5;
      padding: 10px;
      border-radius: 5px;
      text-align: center;
    }
    .timer {
    font-weight: bold;
    background-color: #f5f5f5;
    padding: 10px;
    border-radius: 5px;
    text-align: center;
  }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="mt-4">Mock Test - General Knowledge</h1>
    <div id="timer" class="timer"></div>
    <div class="question">
      <p>1. Who is the current President of the United States?</p>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="q1" value="a">
        <label class="form-check-label">a) Joe Biden</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="q1" value="b">
        <label class="form-check-label">b) Donald Trump</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="q1" value="c">
        <label class="form-check-label">c) Barack Obama</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="q1" value="d">
        <label class="form-check-label">d) George W. Bush</label>
      </div>
    </div>

    <div class="question">
      <p>2. What is the capital city of France?</p>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="q2" value="a">
        <label class="form-check-label">a) Paris</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="q2" value="b">
        <label class="form-check-label">b) Rome</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="q2" value="c">
        <label class="form-check-label">c) Madrid</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="q2" value="d">
        <label class="form-check-label">d) London</label>
      </div>
    </div>

    <!-- Repeat the above structure for the remaining questions -->

    <button class="btn btn-primary" onclick="calculateScore()">Submit</button>
    
    <div id="score" class="score mt-3"></div>
  </div>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script>
  function calculateScore() {
    var score = 0;
    var totalQuestions = 2; // Update this value with the total number of questions in your test.

    // Question 1
    var q1Answer = document.querySelector('input[name="q1"]:checked');
    if (q1Answer && q1Answer.value === "a") {
      score += 1;
    }

    // Question 2
    var q2Answer = document.querySelector('input[name="q2"]:checked');
    if (q2Answer && q2Answer.value === "a") {
      score += 1;
    }

    // Repeat the above structure for the remaining questions

    // Display the score
    var scoreElement = document.getElementById("score");
    scoreElement.innerHTML = "Your score: " + score + "/" + totalQuestions;

    // Optionally, you can disable the submit button after calculating the score.
    var submitButton = document.querySelector('.btn-primary');
    submitButton.disabled = true;
  }

  // Timer code
  var timeLeft = 10; // Total time in seconds
  var timerElement = document.getElementById("timer");

  function countdown() {
    if (timeLeft === 0) {
      // Time is up, automatically submit the form
      calculateScore();
    } else {
      timerElement.innerHTML = "Time left: " + timeLeft + " seconds";
      timeLeft--;
      setTimeout(countdown, 1000); // Update the timer every second (1000 milliseconds)
    }
  }

  countdown(); // Start the countdown when the page loads
</script>
</body>
</html>