<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="title" content="crackmyquiz - online quiz">
  <meta name="description" content="Take the IBPS Clerk Questions Quiz to test your knowledge and prepare for the IBPS Clerk and PO exams.">
  <meta name="keywords" content="IBPS Clerk, IBPS Clerk Quiz, IBPS PO, Competitive Exams, General Knowledge Quiz">
  <meta name="author" content="ceo for crackmyquiz">
  <title>CrackMyQuiz - IBPS CLERK/PO QUIZ</title>
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
<h3 style="text-align: center; margin-top: 20px;">IBPS Clerk Questions Quiz</h3>
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
      question: "1. Choose the correct alternative , Clock : Time  ::  Thermometer : ?  ",
       "answers": [
        { label: "Heat", value: "a" },
        { label: "Radiation", value: "b" },
        { label: "Energy", value: "c" },
        { label: "Cold", value: "d" }
        ],
        "correctAnswer": "a"
      },
      {
  "question": "2. Choose the correct alternative, Sun : Day :: Moon : ?",
  "answers": [
    { "label": "Night", "value": "a" },
    { "label": "Stars", "value": "b" },
    { "label": "Sky", "value": "c" },
    { "label": "Dark", "value": "d" }
  ],
  "correctAnswer": "a"
},
{
  "question": "3. Choose the correct alternative, Book : Author :: Song : ?",
  "answers": [
    { "label": "Singer", "value": "a" },
    { "label": "Melody", "value": "b" },
    { "label": "Lyrics", "value": "c" },
    { "label": "Music", "value": "d" }
  ],
  "correctAnswer": "a"
},
{
  "question": "4. Choose the correct alternative, Cat : Meow :: Dog : ?",
  "answers": [
    { "label": "Bark", "value": "a" },
    { "label": "Purr", "value": "b" },
    { "label": "Howl", "value": "c" },
    { "label": "Whine", "value": "d" }
  ],
  "correctAnswer": "a"
},
{
"question": "5. Muslim: Mosque :: Sikh : ?",
  "answers": [
    { "label": "Golden Temple", "value": "a" },
    { "label": "Medina", "value": "b" },
    { "label": "Fire Temple", "value": "c" },
    { "label": "Gurudwara", "value": "d" }
  ],
  "correctAnswer": "d"
},
{
"question": "6. Gun: Bullet :: Chimney : ?",
  "answers": [
    { "label": "Ground", "value": "a" },
    { "label": "House", "value": "b" },
    { "label": "Roof", "value": "c" },
    { "label": "Smoke", "value": "d" }
  ],
  "correctAnswer": "d"
},
{
"question": "7. Car: Garage :: Aeroplane : ?",
  "answers": [
    { "label": "Port", "value": "a" },
    { "label": "Depot", "value": "b" },
    { "label": "Harbour", "value": "c" },
    { "label": "Hanger", "value": "d" }
  ],
  "correctAnswer": "d"
},
{
"question": "8. Acting: Theatre :: Gambling : ?",
  "answers": [
    { "label": "Casino", "value": "a" },
    { "label": "Club", "value": "b" },
    { "label": "Bar", "value": "c" },
    { "label": "Gymn", "value": "d" }
  ],
  "correctAnswer": "a"
},
{
"question": "9. Oxygen: Burn :: Carbondioxide : ?",
  "answers": [
    { "label": "Isolate", "value": "a" },
    { "label": "Foam", "value": "b" },
    { "label": "Extinquish", "value": "c" },
    { "label": "Explode", "value": "d" }
  ],
  "correctAnswer": "a"
},
{
"question": "10. Hill: Mountain :: Stream : ?",
  "answers": [
    { "label": "River", "value": "a" },
    { "label": "Canal", "value": "b" },
    { "label": "Glacier", "value": "c" },
    { "label": "Avalanche", "value": "d" }
  ],
  "correctAnswer": "a"
},
{
"question": "11. Pork: Pig :: Beef : ?",
  "answers": [
    { "label": "Cow", "value": "a" },
    { "label": "Herb", "value": "b" },
    { "label": "Hen", "value": "c" },
    { "label": "Farmer", "value": "d" }
  ],
  "correctAnswer": "a"
},
{
"question": "12. Court: Justice :: School : ?",
  "answers": [
    { "label": "Teacher", "value": "a" },
    { "label": "Student", "value": "b" },
    { "label": "Ignorance", "value": "c" },
    { "label": "Education", "value": "d" }
  ],
  "correctAnswer": "d"
},
{
"question": "13. Drama: Stage :: Tennis : ?",
  "answers": [
    { "label": "Tournament", "value": "a" },
    { "label": "Net", "value": "b" },
    { "label": "Court", "value": "c" },
    { "label": "Racket", "value": "d" }
  ],
  "correctAnswer": "c"
},
{
"question": "14. Tree: Forest :: Grass : ?",
  "answers": [
    { "label": "Lawn", "value": "a" },
    { "label": "Field", "value": "b" },
    { "label": "Garden", "value": "c" },
    { "label": "Farm", "value": "d" }
  ],
  "correctAnswer": "a"
},
{
"question": "15. Food: Stomach :: Fuel : ?",
  "answers": [
    { "label": "Plane", "value": "a" },
    { "label": "Truck", "value": "b" },
    { "label": "Engine", "value": "c" },
    { "label": "Automobile", "value": "d" }
  ],
  "correctAnswer": "c"
},
{
"question": "16. Food: Stomach :: Fuel : ?",
  "answers": [
    { "label": "Plane", "value": "a" },
    { "label": "Truck", "value": "b" },
    { "label": "Engine", "value": "c" },
    { "label": "Automobile", "value": "d" }
  ],
  "correctAnswer": "c"
},
{
"question": "17. King: Throne :: Rider : ?",
  "answers": [
    { "label": "Seat", "value": "a" },
    { "label": "Horse", "value": "b" },
    { "label": "Saddle", "value": "c" },
    { "label": "Chair", "value": "d" }
  ],
  "correctAnswer": "c"
},
{
"question": "18. Doctor: Diagnosis :: Judge : ?",
  "answers": [
    { "label": "Court", "value": "a" },
    { "label": "Punishment", "value": "b" },
    { "label": "Lawer", "value": "c" },
    { "label": "Judgement", "value": "d" }
  ],
  "correctAnswer": "d"
},
{
"question": "19. Cricket: Bat :: Hockey : ?",
  "answers": [
    { "label": "Field", "value": "a" },
    { "label": "Stick", "value": "b" },
    { "label": "Player", "value": "c" },
    { "label": "Ball", "value": "d" }
  ],
  "correctAnswer": "b"
},
{
"question": "20. Tea: Cup :: Tobacco : ?",
  "answers": [
    { "label": "Leaves", "value": "a" },
    { "label": "Hookah", "value": "b" },
    { "label": "Toxin", "value": "c" },
    { "label": "Cheroot", "value": "d" }
  ],
  "correctAnswer": "d"
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

        