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
<h3 style="text-align: center; margin-top: 20px;">Math Quiz</h3>
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
        question: "Find the sum of 444 + 555 + 666 ",
        answers: [
          { label: "1700", value: "a" },
          { label: "1665", value: "b" },
          { label: "1034", value: "c" },
          { label: "2100", value: "d" }
        ],
        correctAnswer: "b"
      },
      {
       question: "Subtract 128 from 500. ",
       answers: [
          { label: "372", value: "a" },
          { label: "456", value: "b" },
          { label: "234", value: "c" },
          { label: "453", value: "d" }
       ],
       correctAnswer: "a"
     },
     {
       question: "50 times 5 is equal to ",
       answers: [
         { label: "250", value: "a" },
         { label: "2500", value: "b" },
         { label: "550", value: "c" },
         { label: "555", value: "d" }
       ],
       correctAnswer: "b"
     },
     {
        question: "900 ÷ 100 ",
        answers: [
          { label: "900", value: "a" },
          { label: "9", value: "b" },
          { label: "90", value: "c" },
          { label: "999", value: "d" }
        ],
        correctAnswer: "b"
      },
            {
        question: "Simplify: 26 + 32 - 12 ",
        answers: [
          { label: "44", value: "a" },
          { label: "56", value: "b" },
          { label: "46", value: "c" },
          { label: "47", value: "d" }
        ],
        correctAnswer: "c"
      },
      {
      "question": "Simplify: (12 + 7) × 3 - 5 ÷ 2",
      "answers": [
        {"label": "25", "value": "a"},
        {"label": "31", "value": "b"},
        {"label": "36", "value": "c"},
        {"label": "41", "value": "d"}
      ],
      "correctAnswer": "c"
    },
    {
      "question": "Simplify: 3 × (4 + 2) - 8 ÷ 4",
      "answers": [
        {"label": "10", "value": "a"},
        {"label": "12", "value": "b"},
        {"label": "14", "value": "c"},
        {"label": "16", "value": "d"}
      ],
      "correctAnswer": "d"
    },
    {
      "question": "Simplify: 2² × 3 + 5 - 2 × 4",
      "answers": [
        {"label": "9", "value": "a"},
        {"label": "11", "value": "b"},
        {"label": "13", "value": "c"},
        {"label": "15", "value": "d"}
      ],
      "correctAnswer": "a"
    },
        {
      "question": "Simplify: 8 ÷ 4 × (6 - 2)",
      "answers": [
        {"label": "8", "value": "a"},
        {"label": "12", "value": "b"},
        {"label": "16", "value": "c"},
        {"label": "24", "value": "d"}
      ],
      "correctAnswer": "a"
    },
        {
      "question": "Simplify: 5 × (7 + 3) - 4²",
      "answers": [
        {"label": "5", "value": "a"},
        {"label": "34", "value": "b"},
        {"label": "25", "value": "c"},
        {"label": "35", "value": "d"}
      ],
      "correctAnswer": "b"
    },
        {
      "question": "Simplify: 12 - 3 × (4 - 2)",
      "answers": [
        {"label": "6", "value": "a"},
        {"label": "9", "value": "b"},
        {"label": "12", "value": "c"},
        {"label": "15", "value": "d"}
      ],
      "correctAnswer": "a"
    },
        {
      "question": "Simplify: (5 + 2) × 3 - 4 ÷ 2",
      "answers": [
        {"label": "13", "value": "a"},
        {"label": "15", "value": "b"},
        {"label": "17", "value": "c"},
        {"label": "19", "value": "d"}
      ],
      "correctAnswer": "d"
    },
        {
      "question": "Simplify: 9 ÷ (3 + 2) × 4",
      "answers": [
        {"label": "8.2", "value": "a"},
        {"label": "7.2", "value": "b"},
        {"label": "12.2", "value": "c"},
        {"label": "14.2", "value": "d"}
      ],
      "correctAnswer": "b"
    },
    {
      "question": "Find the highest common factor (HCF) of 24 and 36.",
      "answers": [
      {"label": "6", "value": "a"},
      {"label": "12", "value": "b"},
      {"label": "18", "value": "c"},
      {"label": "24", "value": "d"}
      ],
      "correctAnswer": "b"
      },
      {
      "question": "Find the least common multiple (LCM) of 15 and 20.",
      "answers": [
      {"label": "40", "value": "a"},
      {"label": "60", "value": "b"},
      {"label": "75", "value": "c"},
      {"label": "80", "value": "d"}
      ],
      "correctAnswer": "b"
      },
      {
      "question": "Find the HCF of 42 and 56.",
      "answers": [
      {"label": "6", "value": "a"},
      {"label": "7", "value": "b"},
      {"label": "14", "value": "c"},
      {"label": "21", "value": "d"}
      ],
      "correctAnswer": "c"
      },
      {
      "question": "Find the LCM of 9 and 12.",
      "answers": [
      {"label": "12", "value": "a"},
      {"label": "18", "value": "b"},
      {"label": "24", "value": "c"},
      {"label": "36", "value": "d"}
      ],
      "correctAnswer": "d"
      },

      {
      "question": "If the ratio of apples to oranges is 2:3 and there are 10 apples, how many oranges are there?",
      "answers": [
      {"label": "5", "value": "a"},
      {"label": "15", "value": "b"},
      {"label": "20", "value": "c"},
      {"label": "30", "value": "d"}
      ],
      "correctAnswer": "b"
      },
      {
      "question": "The ratio of boys to girls in a class is 3:4. If there are 27 girls, how many boys are there?",
      "answers": [
      {"label": "18", "value": "a"},
      {"label": "27", "value": "b"},
      {"label": "20", "value": "c"},
      {"label": "48", "value": "d"}
      ],
      "correctAnswer": "c"
      },
      {
      "question": "The ratio of the length of a rectangle to its width is 5:2. If the width is 6 cm, what is the length?",
      "answers": [
      {"label": "12 cm", "value": "a"},
      {"label": "15 cm", "value": "b"},
      {"label": "18 cm", "value": "c"},
      {"label": "24 cm", "value": "d"}
      ],
      "correctAnswer": "b"
      },
      {
      "question": "The average weight of a group of 5 people is 60 kg. If a person with a weight of 70 kg joins the group, what will be the new average weight?",
      "answers": [
      {"label": "60.67 kg", "value": "a"},
      {"label": "62.67 kg", "value": "b"},
      {"label": "64.67 kg", "value": "c"},
      {"label": "66.67 kg", "value": "d"}
      ],
      "correctAnswer": "b"
      },
            
      {
      "question": "The average score of a cricket team for 5 matches is 180 runs. If the average score for the first 4 matches is 170 runs, what was the score in the 5th match?",
      "answers": [
      {"label": "170 runs", "value": "a"},
      {"label": "180 runs", "value": "b"},
      {"label": "190 runs", "value": "c"},
      {"label": "220 runs", "value": "d"}
      ],
      "correctAnswer": "d"
      },
      {
      "question": "The average salary of 10 employees in a company is $5000. If the CEO's salary is $30,000, what will be the new average salary?",
      "answers": [
      {"label": "$5000.45", "value": "a"},
      {"label": "$6500.78", "value": "b"},
      {"label": "$7272.73", "value": "c"},
      {"label": "$7277.73", "value": "d"}
      ],
      "correctAnswer": "c"
      },
      {
      "question": "The average temperature of a city for the first 4 days of the week was 25°C. If the average temperature for the first 3 days was 22°C, what was the temperature on the 4th day?",
      "answers": [
      {"label": "22°C", "value": "a"},
      {"label": "25°C", "value": "b"},
      {"label": "28°C", "value": "c"},
      {"label": "34°C", "value": "d"}
      ],
      "correctAnswer": "d"
      },
      {
      "question": "Sara invests $5000 in a savings account with an annual interest rate of 3%. How much interest will she earn after one year?",
      "answers": [
      {"label": "$150", "value": "a"},
      {"label": "$250", "value": "b"},
      {"label": "$300", "value": "c"},
      {"label": "$350", "value": "d"}
      ],
      "correctAnswer": "a"
      },
      {
      "question": "John borrowed $8000 from a bank with an annual interest rate of 5%. If he repays the loan after two years, how much interest will he pay in total?",
      "answers": [
      {"label": "$800", "value": "a"},
      {"label": "$1000", "value": "b"},
      {"label": "$1600", "value": "c"},
      {"label": "$2000", "value": "d"}
      ],
      "correctAnswer": "a"
      },
      {
      "question": "A credit card has an annual interest rate of 18%. If you have an outstanding balance of $2000, how much interest will you be charged after six months?",
      "answers": [
      {"label": "$90", "value": "a"},
      {"label": "$180", "value": "b"},
      {"label": "$270", "value": "c"},
      {"label": "$360", "value": "d"}
      ],
      "correctAnswer": "b"
      },
      {
      "question": "Maria invested $10,000 in a mutual fund with a compound interest rate of 6% per year. How much money will she have after three years?",
      "answers": [
      {"label": "$10,600", "value": "a"},
      {"label": "$11,800", "value": "b"},
      {"label": "$11,910", "value": "c"},
      {"label": "$13,800", "value": "d"}
      ],
      "correctAnswer": "c"
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

        