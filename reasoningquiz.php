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

 /* CSS for the submenus */
.navbar-nav li:hover .submenu {
  display: block;
}

/* CSS to hide the submenus by default */
.navbar-nav .submenu {
  display: none;
  list-style-type: none; /* Remove bullet points */
}

/* Optional CSS for styling the submenus */
.navbar-nav .submenu {
  position: absolute;
  background-color: #f8f9fa;
  padding: 10px;
}

.navbar-nav .submenu li {
  margin-bottom: 5px;
}

.navbar-nav .submenu li a {
  color: #000;
  text-decoration: none;
}

.navbar-nav .submenu li a:hover {
  color: #007bff;
}

  </style>
</head>
<body>
<?php include 'navbar.php'; ?>
<h3 style="text-align: center; margin-top: 20px;">Reasoning Quiz</h3>
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
      question: "1. If 'PEN' is coded as 'QGQ', how would 'CAT' be coded?",
       "answers": [
        { label: "DZX", value: "a" },
        { label: "DCW", value: "b" },
        { label: "DXU", value: "c" },
        { label: "DZU", value: "d" }
        ],
        "correctAnswer": "b"
      },
	 { 
    question: "2. If 'APPLE' is coded as 'ELPPA', how would 'ORANGE' be coded?",
     "answers": [
      { label: "ENOGRA", value: "a" },
      { label: "EGRANO", value: "b" },
      { label: "EGNARO", value: "c" },
      { label: "EGNORA", value: "d" } 
        ],
         "correctAnswer": "c" 
     },
	{ 
    question: "3. If 'BRAVE' is coded as 'CSBWF', how would 'TIGER' be coded?", 
    "answers": [
      { label: "UJHGT", value: "a" },
      { label: "UJHES", value: "b" },
      { label: "UJHFS", value: "c" },
      { label: "UJHGR", value: "d" } 
    ], 
    "correctAnswer": "c" 
    },
	{ question: "4. If 'FLOWER' is coded as 'EKNVDQ', how would 'CARROT' be coded?", "answers": [{ label: "BZQCAR", value: "a" }, { label: "BZQQNS", value: "b" }, { label: "RATOCR", value: "c" }, { label: "RATCRO", value: "d" } ], "correctAnswer": "b" },
	{ question: "5. If 'APPLE' is coded as 'FUUQJ', how would 'ORANGE' be coded?", "answers": [{ label: "RJFCID", value: "a" }, { label: "TWSLLJ", value: "b" }, { label: "TWFSLJ", value: "c" }, { label: "RNQFED", value: "d" } ], "correctAnswer": "c" },
	{ question: "6. If 'OPENAI' is coded as 'PQFOBH', how would 'CHATGPT' be coded?", "answers": [{ label: "DIBUHQS", value: "a" }, { label: "DIBUHQU", value: "b" }, { label: "DIBUHQW", value: "c" }, { label: "SVZBYSA", value: "d" } ], "correctAnswer": "a" },
	{ question: "7. If 'HELLO' is coded as 'OLLEH', how would 'WORLD' be coded?", "answers": [{ label: "DLOWR", value: "a" }, { label: "DLROW", value: "b" }, { label: "WDORL", value: "c" }, { label: "DLWOR", value: "d" } ], "correctAnswer": "b" },
	{ question: "8. If 'APPLE' is coded as 'BPPLE', how would 'ORANGE' be coded?", "answers": [{ label: "EGNARO", value: "a" }, { label: "PRANGE", value: "b" }, { label: "EGANOR", value: "c" }, { label: "EGARNO", value: "d" } ], "correctAnswer": "b"},
	{ question: "9. If 'CAT' is coded as 'FAT', how would 'DOG' be coded?", "answers": [{ label: "FOH", value: "a" }, { label: "GOG", value: "b" }, { label: "EOG", value: "c" }, { label: "DOE", value: "d" } ], "correctAnswer": "b" },
	{ question: "10. What is the next number in the series? 2, 4, 8, 16, ____", "answers": [{ label: "20", value: "a" }, { label: "24", value: "b" }, { label: "32", value: "c" }, { label: "64", value: "d" } ], "correctAnswer": "c" },
	{ question: "11. What is the next number in the series? 3, 6, 12, 24, ____", "answers": [{ label: "36", value: "a" }, { label: "48", value: "b" }, { label: "56", value: "c" }, { label: "48", value: "d" } ], "correctAnswer": "b" },
	{ question: "12. What is the next number in the series? 1, 4, 9, 16, ____", "answers": [{ label: "25", value: "a" }, { label: "36", value: "b" }, { label: "49", value: "c" }, { label: "64", value: "d" } ], "correctAnswer": "c" },
	{ question: "13. What is the next number in the series? 1, 3, 6, 10, ____", "answers": [{ label: "12", value: "a" }, { label: "13", value: "b" }, { label: "15", value: "c" }, { label: "18", value: "d" } ], "correctAnswer": "c" },
	{ question: "14. What is the next number in the series? 5, 10, 20, 40, ____", "answers": [{ label: "60", value: "a" }, { label: "80", value: "b" }, { label: "100", value: "c" }, { label: "120", value: "d" } ], "correctAnswer": "c"},
	{ question: "15. What is the next number in the series? 2, 5, 10, 17, ____", "answers": [{ label: "24", value: "a" }, { label: "26", value: "b" }, { label: "32", value: "c" }, { label: "38", value: "d" } ], "correctAnswer": "b"},
	{ question: "16. What is the next number in the series? 1, 4, 9, 16, ____", "answers": [{ label: "23", value: "a" }, { label: "25", value: "b" }, { label: "28", value: "c" }, { label: "32", value: "d" } ], "correctAnswer": "c" },
	{ question: "17. What is the next number in the series? 1, 1, 2, 3, 5, ____", "answers": [{ label: "8", value: "a" }, { label: "9", value: "b" }, { label: "10", value: "c" }, { label: "13", value: "d" } ], "correctAnswer": "d" },
	{ question: "18. What is the next number in the series? 3, 8, 15, 24, ____", "answers": [{ label: "35", value: "a" }, { label: "36", value: "b" }, { label: "40", value: "c" }, { label: "42", value: "d" } ], "correctAnswer": "a" },
	{ question: "19. What is the next number in the series? 10, 7, 4, 1, -2, ____", "answers": [{ label: "-5", value: "a" }, { label: "-4", value: "b" }, { label: "-3", value: "c" }, { label: "-6", value: "d" } ], "correctAnswer": "a" },
	{ question: "20. What is the next number in the series? 2, 4, 8, 16, 32, ____", "answers": [{ label: "48", value: "a" }, { label: "56", value: "b" }, { label: "64", value: "c" }, { label: "72", value: "d" } ], "correctAnswer": "c" },
	{ question: "21. What is the next number in the series? 6, 11, 21, 36, ____", "answers": [{ label: "51", value: "a" }, { label: "56", value: "b" }, { label: "61", value: "c" }, { label: "66", value: "d" } ], "correctAnswer": "b" },
	{ question: "22. What is the next number in the series? 4, 9, 16, 25, 36, ____", "answers": [{ label: "49", value: "a" }, { label: "48", value: "b" }, { label: "45", value: "c" }, { label: "40", value: "d" } ], "correctAnswer": "a" },
	{ question: "23. What is the next number in the series? 7, 14, 28, 56, ____", "answers": [{ label: "70", value: "a" }, { label: "98", value: "b" }, { label: "112", value: "c" }, { label: "126", value: "d" } ], "correctAnswer": "b" },
	{ question: "24. Complete the analogy: Cat is to Meow as Dog is to ______", "answers": [{ label: "Bark", value: "a" }, { label: "Purr", value: "b" }, { label: "Hiss", value: "c" }, { label: "Roar", value: "d" } ], "correctAnswer": "a" },
	{ question: "25. Complete the analogy: Circle is to Round as Square is to ______", "answers": [{ label: "Straight", value: "a" }, { label: "Cubic", value: "b" }, { label: "Angular", value: "c" }, { label: "Triangle", value: "d" } ], "correctAnswer": "c" },
	{ question: "26. Complete the analogy: Doctor is to Stethoscope as Chef is to ______", "answers": [{ label: "Whisk", value: "a" }, { label: "Spatula", value: "b" }, { label: "Oven", value: "c" }, { label: "Knife", value: "d" } ], "correctAnswer": "b" },
	{ question: "27. Complete the analogy: Sun is to Day as Moon is to ______", "answers": [{ label: "Night", value: "a" }, { label: "Stars", value: "b" }, { label: "Darkness", value: "c" }, { label: "Sky", value: "d" } ], "correctAnswer": "a" },
	{ question: "28. Complete the analogy: Book is to Read as Pen is to ______", "answers": [{ label: "Write", value: "a" }, { label: "Draw", value: "b" }, { label: "Erase", value: "c" }, { label: "Color", value: "d" } ], "correctAnswer": "a" },
	{ question: "29. Complete the analogy: Butterfly is to Cocoon as Caterpillar is to ______", "answers": [{ label: "Pupa", value: "a" }, { label: "Chrysalis", value: "b" }, { label: "Insect", value: "c" }, { label: "Metamorphosis", value: "d" } ], "correctAnswer": "b" },
	{ question: "30. Complete the analogy: Water is to Thirsty as Food is to ______", "answers": [{ label: "Hungry", value: "a" }, { label: "Tasty", value: "b" }, { label: "Full", value: "c" }, { label: "Delicious", value: "d" } ], "correctAnswer": "a" },
	{ question: "31. Complete the analogy: Bee is to Hive as Ant is to ______", "answers": [{ label: "Colony", value: "a" }, { label: "Mound", value: "b" }, { label: "Nest", value: "c" }, { label: "Burrow", value: "d" } ], "correctAnswer": "a"},
	{ question: "32. Complete the analogy: Flower is to Petal as Fruit is to ______", "answers": [{ label: "Seed", value: "a" }, { label: "Skin", value: "b" }, { label: "Juice", value: "c" }, { label: "Peel", value: "d" } ],"correctAnswer": "d" },
	{ question: "33. Complete the analogy: Bird is to Feather as Snake is to ______", "answers": [{ label: "Scale", value: "a" }, { label: "Skin", value: "b" }, { label: "Tail", value: "c" }, { label: "Venom", value: "d" } ], "correctAnswer": "b" },
	{ question: "34. Complete the analogy: Tree is to Bark as Human is to ______", "answers": [{ label: "Hair", value: "a" }, { label: "Skin", value: "b" }, { label: "Muscle", value: "c" }, { label: "Bone", value: "d" } ], "correctAnswer": "b" },
	{ question: "35. Complete the analogy: Hammer is to Nail as Screwdriver is to ______", "answers": [{ label: "Screw", value: "a" }, { label: "Wood", value: "b" }, { label: "Wrench", value: "c" }, { label: "Plank", value: "d" } ], "correctAnswer": "a" },
	{ question: "36. Complete the analogy: Ocean is to Saltwater as Lake is to ______", "answers": [{ label: "Freshwater", value: "a" }, { label: "Fish", value: "b" }, { label: "Seaweed", value: "c" }, { label: "Tide", value: "d" } ], "correctAnswer": "a" },
	{ question: "37. Complete the analogy: Piano is to Music as Canvas is to ______", "answers": [{ label: "Paint", value: "a" }, { label: "Brush", value: "b" }, { label: "Easel", value: "c" }, { label: "Artist", value: "d" } ], "correctAnswer": "a" },
	{ question: "38. Complete the analogy: Key is to Lock as Code is to ______", "answers": [{ label: "Cryptograph", value: "a" }, { label: "Decode", value: "b" }, { label: "Password", value: "c" }, { label: "Encrypt", value: "d" } ], "correctAnswer": "c" },
	{ question: "39. Complete the analogy: Cloud is to Sky as Smoke is to ______", "answers": [{ label: "Fire", value: "a" }, { label: "Chimney", value: "b" }, { label: "Air", value: "c" }, { label: "Pollution", value: "d" } ], "correctAnswer": "a"},
	{ question: "40. In the artificial language of 'Zem', the word 'Lofa' means 'blue sky', 'Foma' means 'bright sun', and 'Lofa Foma' means 'beautiful day'. What does the word 'Foma Lofa' mean?", "answers": [{ label: "Dark night", value: "a" }, { label: "Cloudy sky", value: "b" }, { label: "Gloomy day", value: "c" }, { label: "Sunny morning", value: "d" } ], "correctAnswer": "d" },
	{ question: "41. In the artificial language of 'Plik', the word 'Kiplo' means 'red rose', 'Plikar' means 'beautiful garden', and 'Kiplo Plikar' means 'rose garden'. What does the word 'Plikar Kiplo' mean?", "answers": [{ label: "Flower vase", value: "a" }, { label: "Garden party", value: "b" }, { label: "Beautiful flower", value: "c" }, { label: "Rose bush", value: "d" } ], answer: "c" },
	{ question: "42. In the artificial language of 'Nokra', the word 'Tolka' means 'big mountain', 'Sinta' means 'deep valley', and 'Nokra Tolka Sinta' means 'exploration expedition'. What does the word 'Sinta Tolka' mean?", "answers": [{ label: "Mountain range", value: "a" }, { label: "Hiking trail", value: "b" }, { label: "Valley view", value: "c" }, { label: "Deep mountain", value: "d" } ], "correctAnswer": "c" },
	{ question: "43. In the artificial language of 'Zora', the word 'Giblom' means 'strong wind', 'Zolra' means 'heavy rain', and 'Giblom Zolra' means 'stormy weather'. What does the word 'Zolra Giblom' mean?", "answers": [{ label: "Mild breeze", value: "a" }, { label: "Torrential downpour", value: "b" }, { label: "Thunderstorm", value: "c" }, { label: "Gentle rain", value: "d" } ], "correctAnswer": "d"},
	{ question: "44. In the artificial language of 'Minku', the word 'Lazim' means 'big cat', 'Dushi' means 'fast runner', and 'Minku Lazim Dushi' means 'wild predator'. What does the word 'Dushi Lazim' mean?", "answers": [{ label: "Big prey", value: "a" }, { label: "Swift hunter", value: "b" }, { label: "Cunning escape", value: "c" }, { label: "Fast cat", value: "d" } ], "correctAnswer": "b"},
	{ question: "45. In the artificial language of 'Zorblu', the word 'Glibi' means 'happy child', 'Mornu' means 'playful', and 'Zorblu Glibi Mornu' means 'joyful laughter'. What does the word 'Mornu Glibi' mean?", "answers": [{ label: "Sad expression", value: "a" }, { label: "Serious conversation", value: "b" }, { label: "Playful child", value: "c" }, { label: "Laughter therapy", value: "d" } ], "correctAnswer": "c"},
	{ question: "46. In the artificial language of 'Flikra', the word 'Mosh' means 'bright star', 'Flakra' means 'clear sky', and 'Flikra Mosh Flakra' means 'starry night'. What does the word 'Flakra Mosh' mean?", "answers": [{ label: "Cloudy sky", value: "a" }, { label: "Moonlit night", value: "b" }, { label: "Darkness", value: "c" }, { label: "Shining star", value: "d" } ], "correctAnswer": "b" },
	{ question: "47. In the artificial language of 'Trellis', the word 'Volla' means 'green leaf', 'Fresco' means 'cool breeze', and 'Trellis Volla Fresco' means 'refreshing nature'. What does the word 'Fresco Volla' mean?", "answers": [{ label: "Rustling trees", value: "a" }, { label: "Hot weather", value: "b" }, { label: "Refreshing leaf", value: "c" }, { label: "Gentle wind", value: "d" } ], "correctAnswer": "d"},
	{ question: "48. In the artificial language of 'Zepro', the word 'Flibo' means 'fast car', 'Zepri' means 'powerful engine', and 'Zepro Flibo Zepri' means 'racing car'. What does the word 'Flibo Zepro' mean?", "answers": [{ label: "Loud noise", value: "a" }, { label: "Speed limit", value: "b" }, { label: "Sports car", value: "c" }, { label: "Fuel consumption", value: "d" } ], "correctAnswer": "c" },
	{ question: "49. In the artificial language of 'Merkon', the word 'Zorba' means 'tall building', 'Linta' means 'busy street', and 'Merkon Zorba Linta' means 'city center'. What does the word 'Linta Zorba' mean?", "answers": [{ label: "Residential area", value: "a" }, { label: "Traffic jam", value: "b" }, { label: "Skyscraper", value: "c" }, { label: "Main road", value: "d" } ], "correctAnswer": "d" },
	{ question: "50. In the artificial language of 'Glimba', the word 'Zorp' means 'yellow flower', 'Dinka' means 'fragrant', and 'Glimba Zorp Dinka' means 'beautiful garden'. What does the word 'Dinka Zorp' mean?", "answers": [{ label: "Flower arrangement", value: "a" }, { label: "Pleasant scent", value: "b" }, { label: "Sunflower field", value: "c" }, { label: "Colorful petals", value: "d" } ], "correctAnswer": "b" },
	{ question: "51. In the artificial language of 'Flumba', the word 'Tivlo' means 'fast runner', 'Plinta' means 'endurance', and 'Flumba Tivlo Plinta' means 'marathon runner'. What does the word 'Plinta Tivlo' mean?", "answers": [{ label: "Speed record", value: "a" }, { label: "Runner's high", value: "b" }, { label: "Stamina training", value: "c" }, { label: "Endurance runner", value: "d" } ], "correctAnswer": "d" },
	{ question: "52. In the artificial language of 'Zinova', the word 'Finka' means 'blue sky', 'Korla' means 'bright sun', and 'Zinova Finka Korla' means 'clear day'. What does the word 'Korla Finka' mean?", "answers": [{ label: "Sunny weather", value: "a" }, { label: "Stormy sky", value: "b" }, { label: "Cloudy day", value: "c" }, { label: "Nighttime", value: "d" } ], "correctAnswer": "a"},
	{ question: "53. In the artificial language of 'Blorba', the word 'Zorgo' means 'big mountain', 'Plimba' means 'deep valley', and 'Blorba Zorgo Plimba' means 'scenic landscape'. What does the word 'Plimba Zorgo' mean?", "answers": [{ label: "Hiking trail", value: "a" }, { label: "Mountain peak", value: "b" }, { label: "Valley view", value: "c" }, { label: "Canyon exploration", value: "d" } ],"correctAnswer": "c"},
	{ question: "54. In the artificial language of 'Jibora', the word 'Folka' means 'sweet dessert', 'Jibro' means 'creamy texture', and 'Jibora Folka Jibro' means 'delicious treat'. What does the word 'Folka Jibora' mean?", "answers": [{ label: "Sugar craving", value: "a" }, { label: "Rich flavor", value: "b" }, { label: "Sweet tooth", value: "c" }, { label: "Dessert menu", value: "d" } ], "correctAnswer": "c"},


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
              <button type="button" class="btn btn-primary" onclick="showAnswer(${i})">Show Answer</button>
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
     </div>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
              <script src="js/style.js"></script>
             
              </body>
              </html>

        