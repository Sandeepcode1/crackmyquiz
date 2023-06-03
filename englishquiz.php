<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="title" content="crackmyquiz - English Quiz">
  <meta name="description" content="Test your English language skills with the CrackMyQuiz English Quiz! Explore antonyms and enhance your vocabulary. Prepare for competitive exams like IBPS Clerk, IBPS PO, Railway exams, and other Indian competitive exams.">
  <meta name="keywords" content="crackmyquiz, quiz, English quiz, antonyms, vocabulary, IBPS Clerk, IBPS PO, Railway exams, competitive exams">
  <meta name="author" content="CEO of crackmyquiz">
  <title>CrackMyQuiz - English Quiz</title>
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
<h3 style="text-align: center; margin-top: 20px;">English Quiz</h3>
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
    question: "1. Antonyms of ACTIVE?",
    "answers": [
      { label: "Passive", value: "a" },
      { label: "Lazy", value: "b" },
      { label: "Inert", value: "c" },
      { label: "Dormant", value: "d" }
    ],
    "correctAnswer": "a"
       },
       {
    question: "2. Antonyms of HAPPY?",
    "answers": [
      { label: "Sad", value: "a" },
      { label: "Depressed", value: "b" },
      { label: "Gloomy", value: "c" },
      { label: "Melancholy", value: "d" }
    ],
    "correctAnswer": "a"
     },
     {
    question: "3. Antonyms of CLEAN?",
    "answers": [
      { label: "Dirty", value: "a" },
      { label: "Messy", value: "b" },
      { label: "Untidy", value: "c" },
      { label: "Sloppy", value: "d" }
    ],
    "correctAnswer": "a"
    },
    {
    question: "4. Antonyms of WEAK?",
    "answers": [
      { label: "Strong", value: "a" },
      { label: "Powerful", value: "b" },
      { label: "Vigorous", value: "c" },
      { label: "Herculean", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "5. Antonyms of SIMPLE?",
    "answers": [
      { label: "Complex", value: "a" },
      { label: "Difficult", value: "b" },
      { label: "Obscure", value: "c" },
      { label: "Intricate", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "6. Antonyms of CLOSE?",
    "answers": [
      { label: "Far", value: "a" },
      { label: "Distant", value: "b" },
      { label: "Remote", value: "c" },
      { label: "Afar", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "7. Antonyms of SOFT?",
    "answers": [
      { label: "Hard", value: "a" },
      { label: "Rough", value: "b" },
      { label: "Brittle", value: "c" },
      { label: "Tough", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "8. Antonyms of BEGIN?",
    "answers": [
      { label: "End", value: "a" },
      { label: "Terminate", value: "b" },
      { label: "Finish", value: "c" },
      { label: "Cease", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "9. Choose the correctly spelled word",
    "answers": [
      { label: "Begin", value: "a" },
      { label: "Begign", value: "b" },
      { label: "Begon", value: "c" },
      { label: "Begine", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
"question": "10.Choose the correctly spelled word.",
"answers": [
{ "label": "Accomodate", "value": "a" },
{ "label": "Accommodate", "value": "b" },
{ "label": "Acommodate", "value": "c" },
{ "label": "Accommadate", "value": "d" }
],
"correctAnswer": "b"
},

{
"question": "11. Choose the correctly spelled word.",
"answers": [
{ "label": "Definately", "value": "a" },
{ "label": "Definitely", "value": "b" },
{ "label": "Definetely", "value": "c" },
{ "label": "Definatly", "value": "d" }
],
"correctAnswer": "b"
},

{
"question": "12. Find the correctly spelled word.",
"answers": [
{ "label": "Occurence", "value": "a" },
{ "label": "Occurence", "value": "b" },
{ "label": "Occurrence", "value": "c" },
{ "label": "Occurennce", "value": "d" }
],
"correctAnswer": "c"
},

{
"question": "13. Choose the correctly spelled word.",
"answers": [
{ "label": "Concious", "value": "a" },
{ "label": "Conscous", "value": "b" },
{ "label": "Conscious", "value": "c" },
{ "label": "Concious", "value": "d" }
],
"correctAnswer": "c"
},

{
"question": "14. Choose the correctly spelled word.",
"answers": [
{ "label": "Receieve", "value": "a" },
{ "label": "Receive", "value": "b" },
{ "label": "Receieve", "value": "c" },
{ "label": "Recieve", "value": "d" }
],
"correctAnswer": "b"
},
{
"question": "15. What is the word for 'A person who loves books'?",
"answers": [
{ "label": "Bibliophile", "value": "a" },
{ "label": "Philanthropist", "value": "b" },
{ "label": "Atheist", "value": "c" },
{ "label": "Narcissist", "value": "d" }
],
"correctAnswer": "a"
},

{
"question": "16. What is the word for 'A person who travels to sacred places'?",
"answers": [
{ "label": "Pilgrim", "value": "a" },
{ "label": "Voyager", "value": "b" },
{ "label": "Adventurer", "value": "c" },
{ "label": "Explorer", "value": "d" }
],
"correctAnswer": "a"
},

{
"question": "17. What is the word for 'A person who is excessively talkative'?",
"answers": [
{ "label": "Garrulous", "value": "a" },
{ "label": "Introvert", "value": "b" },
{ "label": "Misanthrope", "value": "c" },
{ "label": "Ambivert", "value": "d" }
],
"correctAnswer": "a"
},

{
"question": "18. What is the word for 'A person who is against war and violence'?",
"answers": [
{ "label": "Pacifist", "value": "a" },
{ "label": "Revolutionary", "value": "b" },
{ "label": "Warrior", "value": "c" },
{ "label": "Anarchist", "value": "d" }
],
"correctAnswer": "a"
},

{
"question": "19. What is the word for 'A person who hates or distrusts humankind'?",
"answers": [
{ "label": "Misanthrope", "value": "a" },
{ "label": "Philanthropist", "value": "b" },
{ "label": "Optimist", "value": "c" },
{ "label": "Cynic", "value": "d" }
],
"correctAnswer": "a"
},

{
    question: "20. What is the word for 'A person who loves to travel'?",
    "answers": [
      { label: "Traveler", value: "a" },
      { label: "Voyager", value: "b" },
      { label: "Tourist", value: "c" },
      { label: "Explorator", value: "d" }
    ],
    "correctAnswer": "b"
  },
  {
    question: "21. What is the word for 'A person who loves to eat'?",
    "answers": [
      { label: "Gourmet", value: "a" },
      { label: "Epicure", value: "b" },
      { label: "Foodie", value: "c" },
      { label: "Gourmand", value: "d" }
    ],
    "correctAnswer": "c"
  },
  {
    question: "22. What is the word for 'A person who loves to sleep'?",
    "answers": [
      { label: "Napper", value: "a" },
      { label: "Sleeper", value: "b" },
      { label: "Dormer", value: "c" },
      { label: "Snoozer", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "23. What is the word for 'A person who loves to laugh'?",
    "answers": [
      { label: "Jokester", value: "a" },
      { label: "Guffaw", value: "b" },
      { label: "Chucklehead", value: "c" },
      { label: "Joker", value: "d" }
    ],
    "correctAnswer": "d"
  },
  {
    question: "24. What is the word for 'A person who loves to learn'?",
    "answers": [
      { label: "Scholar", value: "a" },
      { label: "Intellectual", value: "b" },
      { label: "Didactic", value: "c" },
      { label: "Academic", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "25. What is the word for 'A person who loves to play'?",
    "answers": [
      { label: "Gambler", value: "a" },
      { label: "Toy", value: "b" },
      { label: "Joker", value: "c" },
      { label: "Pleasure-seeker", value: "d" }
    ],
    "correctAnswer": "d"
  },
  {
    question: "26. What is the word for 'A person who loves to sing'?",
    "answers": [
      { label: "Melodious", value: "a" },
      { label: "Vocal", value: "b" },
      { label: "Harmonious", value: "c" },
      { label: "Tenor", value: "d" }
    ],
    "correctAnswer": "b"
  },
  {
    question: "27. What is the word for 'A person who loves to dance'?",
    "answers": [
      { label: "Drummer", value: "a" },
      { label: "Baller", value: "b" },
      { label: "Choreographer", value: "c" },
      { label: "Dancer", value: "d" }
    ],
    "correctAnswer": "d"
  },
  {
    question: "28. What is the word for 'A person who loves to write'?",
    "answers": [
      { label: "Author", value: "a" },
      { label: "Poet", value: "b" },
      { label: "Novelist", value: "c" },
      { label: "Writer", value: "d" }
    ],
    "correctAnswer": "d"
  },
  {
"question": "29. What is the word for 'A person who is skilled in many areas or activities'?",
"answers": [
{ "label": "Polymath", "value": "a" },
{ "label": "Novice", "value": "b" },
{ "label": "Specialist", "value": "c" },
{ "label": "Dilettante", "value": "d" }
],
"correctAnswer": "a"
},

{
"question": "30. What is the word for 'A person who is unable to sleep'?",
"answers": [
{ "label": "Insomniac", "value": "a" },
{ "label": "Nocturnal", "value": "b" },
{ "label": "Dreamer", "value": "c" },
{ "label": "Sleeper", "value": "d" }
],
"correctAnswer": "a"
},

{
"question": "31. What is the word for 'A person who writes a book, article, or document'?",
"answers": [
{ "label": "Author", "value": "a" },
{ "label": "Scribe", "value": "b" },
{ "label": "Editor", "value": "c" },
{ "label": "Publisher", "value": "d" }
],
"correctAnswer": "a"
},

{
"question": "32. What is the word for 'A person who loves and collects art'?",
"answers": [
{ "label": "Art collector", "value": "a" },
{ "label": "Artisan", "value": "b" },
{ "label": "Connoisseur", "value": "c" },
{ "label": "Curator", "value": "d" }
],
"correctAnswer": "c"
},

{
"question": "33. What is the word for 'A person who dislikes or distrusts other people'?",
"answers": [
{ "label": "Misanthrope", "value": "a" },
{ "label": "Extrovert", "value": "b" },
{ "label": "Optimist", "value": "c" },
{ "label": "Introvert", "value": "d" }
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

        