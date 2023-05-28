<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CrackMyQuiz - General Knowledge Quiz</title>
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
<h3 style="text-align: center; margin-top: 20px;">Sports Quiz</h3>
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div id="quiz-container">
        </div>
      </div>
    </div>
  </div>

  <script>
    const quizData = [
        {
  "question": "1. Which country has won the most FIFA World Cup titles?",
  "answers": [
    {"label": "Brazil", "value": "a"},
    {"label": "Germany", "value": "b"},
    {"label": "Italy", "value": "c"},
    {"label": "Argentina", "value": "d"}
  ],
  "correctAnswer": "a"
},
{
  "question": "2. Which sport is associated with the Wimbledon Championships?",
  "answers": [
    {"label": "Tennis", "value": "a"},
    {"label": "Cricket", "value": "b"},
    {"label": "Golf", "value": "c"},
    {"label": "Football", "value": "d"}
  ],
  "correctAnswer": "a"
},
{
  "question": "3. Which athlete has the most Olympic gold medals?",
  "answers": [
    {"label": "Usain Bolt", "value": "a"},
    {"label": "Michael Phelps", "value": "b"},
    {"label": "Serena Williams", "value": "c"},
    {"label": "Lionel Messi", "value": "d"}
  ],
  "correctAnswer": "b"
},
{
  "question": "4. In which sport is the Stanley Cup awarded?",
  "answers": [
    {"label": "Ice Hockey", "value": "a"},
    {"label": "Basketball", "value": "b"},
    {"label": "Baseball", "value": "c"},
    {"label": "Golf", "value": "d"}
  ],
  "correctAnswer": "a"
},
{
  "question": "5. Who is the all-time leading scorer in NBA history?",
  "answers": [
    {"label": "Michael Jordan", "value": "a"},
    {"label": "LeBron James", "value": "b"},
    {"label": "Kareem Abdul-Jabbar", "value": "c"},
    {"label": "Magic Johnson", "value": "d"}
  ],
  "correctAnswer": "c"
},
{
  "question": "6. Which country hosted the 2014 FIFA World Cup?",
  "answers": [
    {"label": "Brazil", "value": "a"},
    {"label": "Germany", "value": "b"},
    {"label": "Russia", "value": "c"},
    {"label": "France", "value": "d"}
  ],
  "correctAnswer": "a"
},
{
  "question": "7. Who holds the record for the most home runs in Major League Baseball (MLB) history?",
  "answers": [
    {"label": "Babe Ruth", "value": "a"},
    {"label": "Barry Bonds", "value": "b"},
    {"label": "Hank Aaron", "value": "c"},
    {"label": "Alex Rodriguez", "value": "d"}
  ],
  "correctAnswer": "b"
},
{
  "question": "8. Which country won the most medals in the 2020 Summer Olympics?",
  "answers": [
    {"label": "United States", "value": "a"},
    {"label": "China", "value": "b"},
    {"label": "Japan", "value": "c"},
    {"label": "Great Britain", "value": "d"}
  ],
  "correctAnswer": "a"
},
{
  "question": "9. In which sport is the Davis Cup awarded?",
  "answers": [
    {"label": "Tennis", "value": "a"},
    {"label": "Golf", "value": "b"},
    {"label": "Cricket", "value": "c"},
    {"label": "Soccer", "value": "d"}
  ],
  "correctAnswer": "a"
},
{
  "question": "10. Who won the UEFA Euro 2020 football tournament?",
  "answers": [
    {"label": "Italy", "value": "a"},
    {"label": "England", "value": "b"},
    {"label": "France", "value": "c"},
    {"label": "Germany", "value": "d"}
  ],
  "correctAnswer": "a"
},
{
  "question": "11. Which golfer has the most Masters Tournament victories?",
  "answers": [
    {"label": "Tiger Woods", "value": "a"},
    {"label": "Jack Nicklaus", "value": "b"},
    {"label": "Arnold Palmer", "value": "c"},
    {"label": "Phil Mickelson", "value": "d"}
  ],
  "correctAnswer": "b"
},
{
  "question": "12. Which country has won the most Olympic gold medals in athletics (track and field) events?",
  "answers": [
    {"label": "United States", "value": "a"},
    {"label": "Jamaica", "value": "b"},
    {"label": "Kenya", "value": "c"},
    {"label": "Great Britain", "value": "d"}
  ],
  "correctAnswer": "a"
},

    ];

    let quizHtml = "";
    for (let i = 0; i < quizData.length; i++) {
      const question = quizData[i].question;
      const answers = quizData[i].answers;
      
      let answerHtml = "";
      for (let j = 0; j < answers.length; j++) {
        const label = answers[j].label;
        const value = answers[j].value;
        answerHtml += `
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question-${i}" id="question-${i}-${value}" value="${value}" required>
            <label class="form-check-label" for="question-${i}-${value}">
              ${label}
            </label>
          </div>
        `;
      }
      
      quizHtml += `
        <div class="card my-5">
          <div class="card-body">
            <h5 class="card-title">Question ${i+1}:</h5>
            <p class="card-text">${question}</p>
            ${answerHtml}
            <div class="form-group">
            <button type="button" class="btn btn-primary" onclick="showAnswer(${i})" style="margin-top: 10px;">Show Answer</button>
            </div>
            <div id="answer-${i}" style="background-color:silver"></div>
          </div>
        </div>

      `;
    }
 
    document.getElementById("quiz-container").innerHTML = quizHtml;

    function showAnswer(questionIndex) {
  const selectedValue = document.querySelector(`input[name="question-${questionIndex}"]:checked`);
  const correctAnswer = quizData[questionIndex].correctAnswer;
  const answerDiv = document.querySelector(`#answer-${questionIndex}`);

  answerDiv.style.backgroundColor = "#f9f9f9";
  answerDiv.style.fontSize = "18px";
  answerDiv.style.padding = "5px";

  if (selectedValue === null) {
    // alert("Please select an answer.");
    answerDiv.innerHTML += ` Please select an answer`;
  } else if (selectedValue.value === correctAnswer) {
    answerDiv.innerHTML = "Correct";
    answerDiv.style.color = "green";
  } else {
    answerDiv.innerHTML = "Incorrect";
    answerDiv.style.color = "red";
    const correctLabel = quizData[questionIndex].answers.find(answer => answer.value === correctAnswer).label;
    answerDiv.innerHTML += `, correct answer is "${correctLabel}"`;
  }

}

  </script>
        <div class="pagination">
       <a href="#" class="prev">Prev</a>
       <a href="#" class="next">Next</a>
       <a href="#" class="currentpage">Page 1</a>
     </div>
     <?php include 'footer.php'; ?>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
              <script src="js/style.js"></script>
             
              </body>
              </html>

        