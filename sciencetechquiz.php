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
<h3 style="text-align: center; margin-top: 20px;">Science Quiz</h3>
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
        question: "1. What is the largest organ of the human body? ",
        answers: [
            { label: "Liver", value: "a" },
            { label: "Skin", value: "b" },
            { label: "Heart", value: "c" },
            { label: "Brain", value: "d" }
        ],
        correctAnswer: "b"
      },
      {
        question: "2. Which scientist proposed the theory of relativity?",
        answers: [
        { label: "Albert Einstein", value: "a" },
        { label: "Isaac Newton", value: "b" },
        { label: "Charles Darwin", value: "c" },
        { label: "Marie Curie", value: "d" }
        ],
        correctAnswer: "a"
      },
      {
        question: "3. What is the chemical symbol for the element Iron?",
        answers: [
        { label: "Ir", value: "a" },
        { label: "Fe", value: "b" },
        { label: "In", value: "c" },
        { label: "Au", value: "d" }
        ],
        correctAnswer: "b"
    },
        {
        question: "4. What is the unit of electrical resistance?",
        answers: [
        { label: "Volt", value: "a" },
        { label: "Ohm", value: "b" },
        { label: "Watt", value: "c" },
        { label: "Ampere", value: "d" }
        ],
        correctAnswer: "b"
    }, {
    question: "5. Which scientist discovered penicillin?",
    answers: [
      { label: "Alexander Fleming", value: "a" },
      { label: "Marie Curie", value: "b" },
      { label: "Galileo Galilei", value: "c" },
      { label: "Nikola Tesla", value: "d" }
    ],
    correctAnswer: "a"
  },
  {
  question: "6. Which element is the primary constituent of the Sun?",
  answers: [
    { label: "Helium", value: "a" },
    { label: "Hydrogen", value: "b" },
    { label: "Oxygen", value: "c" },
    { label: "Carbon", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "7. What is the unit of measurement for electric current?",
  answers: [
    { label: "Volt", value: "a" },
    { label: "Ampere", value: "b" },
    { label: "Watt", value: "c" },
    { label: "Ohm", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "8. Who is considered the father of modern computer science?",
  answers: [
    { label: "Alan Turing", value: "a" },
    { label: "Steve Jobs", value: "b" },
    { label: "Bill Gates", value: "c" },
    { label: "Mark Zuckerberg", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "9. What is the largest species of shark?",
  answers: [
    { label: "Great White Shark", value: "a" },
    { label: "Hammerhead Shark", value: "b" },
    { label: "Whale Shark", value: "c" },
    { label: "Tiger Shark", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "10. Which planet has the most moons?",
  answers: [
    { label: "Earth", value: "a" },
    { label: "Mars", value: "b" },
    { label: "Saturn", value: "c" },
    { label: "Jupiter", value: "d" }
  ],
  correctAnswer: "d"
},
{
  question: "11. What is the smallest unit of a chemical element?",
  answers: [
    { label: "Atom", value: "a" },
    { label: "Molecule", value: "b" },
    { label: "Cell", value: "c" },
    { label: "Nucleus", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "12. Which scientist developed the theory of general relativity?",
  answers: [
    { label: "Isaac Newton", value: "a" },
    { label: "Albert Einstein", value: "b" },
    { label: "Galileo Galilei", value: "c" },
    { label: "Nikola Tesla", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "13. What is the SI unit of force?",
  answers: [
    { label: "Newton", value: "a" },
    { label: "Watt", value: "b" },
    { label: "Joule", value: "c" },
    { label: "Kilogram", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "14. Which scientist proposed the laws of planetary motion?",
  answers: [
    { label: "Isaac Newton", value: "a" },
    { label: "Galileo Galilei", value: "b" },
    { label: "Johannes Kepler", value: "c" },
    { label: "Nicolaus Copernicus", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "15. What is the unit of measurement for frequency?",
  answers: [
    { label: "Hertz", value: "a" },
    { label: "Watt", value: "b" },
    { label: "Ampere", value: "c" },
    { label: "Ohm", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "16. What is the process of converting light energy into chemical energy called?",
  answers: [
    { label: "Photosynthesis", value: "a" },
    { label: "Respiration", value: "b" },
    { label: "Decomposition", value: "c" },
    { label: "Fermentation", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "17. Which scientist is known as the 'father of electricity'?",
  answers: [
    { label: "Thomas Edison", value: "a" },
    { label: "Nikola Tesla", value: "b" },
    { label: "Benjamin Franklin", value: "c" },
    { label: "Michael Faraday", value: "d" }
  ],
  correctAnswer: "d"
},
{
  question: "18. What is the chemical symbol for the element Sodium?",
  answers: [
    { label: "Na", value: "a" },
    { label: "So", value: "b" },
    { label: "Mg", value: "c" },
    { label: "K", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "19. Which planet is known as the 'Morning Star' or 'Evening Star'?",
  answers: [
    { label: "Venus", value: "a" },
    { label: "Mercury", value: "b" },
    { label: "Mars", value: "c" },
    { label: "Saturn", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "20. What is the study of heredity and variation in living organisms called?",
  answers: [
    { label: "Ecology", value: "a" },
    { label: "Genetics", value: "b" },
    { label: "Botany", value: "c" },
    { label: "Zoology", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "21. What is the unit of measurement for electric potential difference?",
  answers: [
    { label: "Watt", value: "a" },
    { label: "Ampere", value: "b" },
    { label: "Ohm", value: "c" },
    { label: "Volt", value: "d" }
  ],
  correctAnswer: "d"
},
{
  question: "22. Who is credited with discovering the double helix structure of DNA?",
  answers: [
    { label: "Francis Crick and James Watson", value: "a" },
    { label: "Rosalind Franklin", value: "b" },
    { label: "Gregor Mendel", value: "c" },
    { label: "Linus Pauling", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "23. What is the study of the Earth's atmosphere and weather called?",
  answers: [
    { label: "Geology", value: "a" },
    { label: "Meteorology", value: "b" },
    { label: "Astronomy", value: "c" },
    { label: "Climatology", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "24. What is the process of converting a liquid into a gas called?",
  answers: [
    { label: "Condensation", value: "a" },
    { label: "Evaporation", value: "b" },
    { label: "Sublimation", value: "c" },
    { label: "Melting", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "25. What is the study of fossils called?",
  answers: [
    { label: "Paleontology", value: "a" },
    { label: "Archaeology", value: "b" },
    { label: "Geology", value: "c" },
    { label: "Anthropology", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "26. What is the speed of light in a vacuum?",
  answers: [
    { label: "300,000 km/s", value: "a" },
    { label: "150,000 km/s", value: "b" },
    { label: "200,000 km/s", value: "c" },
    { label: "250,000 km/s", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "27. Which scientist developed the three laws of motion?",
  answers: [
    { label: "Albert Einstein", value: "a" },
    { label: "Isaac Newton", value: "b" },
    { label: "Galileo Galilei", value: "c" },
    { label: "Nikola Tesla", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "28. What is the chemical symbol for the element Gold?",
  answers: [
    { label: "Au", value: "a" },
    { label: "Ag", value: "b" },
    { label: "Pt", value: "c" },
    { label: "Cu", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "29. What is the process of plants converting sunlight into chemical energy called?",
  answers: [
    { label: "Photosynthesis", value: "a" },
    { label: "Respiration", value: "b" },
    { label: "Transpiration", value: "c" },
    { label: "Pollination", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "30. What is the study of the Earth's physical structure and substance called?",
  answers: [
    { label: "Geology", value: "a" },
    { label: "Meteorology", value: "b" },
    { label: "Astronomy", value: "c" },
    { label: "Biology", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "31. What is the SI unit of pressure?",
  answers: [
    { label: "Pascal", value: "a" },
    { label: "Newton", value: "b" },
    { label: "Watt", value: "c" },
    { label: "Joule", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "32. Who developed the theory of evolution by natural selection?",
  answers: [
    { label: "Charles Darwin", value: "a" },
    { label: "Gregor Mendel", value: "b" },
    { label: "Louis Pasteur", value: "c" },
    { label: "Marie Curie", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "33. What is the study of the interaction between organisms and their environment called?",
  answers: [
    { label: "Ecology", value: "a" },
    { label: "Genetics", value: "b" },
    { label: "Botany", value: "c" },
    { label: "Zoology", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "34. What is the unit of measurement for electrical resistance?",
  answers: [
    { label: "Ohm", value: "a" },
    { label: "Ampere", value: "b" },
    { label: "Watt", value: "c" },
    { label: "Volt", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "35. Which planet is known as the 'Red Planet'?",
  answers: [
    { label: "Venus", value: "a" },
    { label: "Mars", value: "b" },
    { label: "Jupiter", value: "c" },
    { label: "Saturn", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "36. What is the process of converting a solid directly into a gas called?",
  answers: [
    { label: "Condensation", value: "a" },
    { label: "Evaporation", value: "b" },
    { label: "Sublimation", value: "c" },
    { label: "Melting", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "37. What is the study of the motion of objects and the forces acting on them called?",
  answers: [
    { label: "Biology", value: "a" },
    { label: "Physics", value: "b" },
    { label: "Chemistry", value: "c" },
    { label: "Geology", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "38. What is the chemical symbol for the element Iron?",
  answers: [
    { label: "Fe", value: "a" },
    { label: "Ir", value: "b" },
    { label: "In", value: "c" },
    { label: "Au", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "39. Which scientist is known for the theory of relativity and the equation E=mc²?",
  answers: [
    { label: "Isaac Newton", value: "a" },
    { label: "Albert Einstein", value: "b" },
    { label: "Marie Curie", value: "c" },
    { label: "Max Planck", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "40. What is the unit of electrical current?",
  answers: [
    { label: "Volt", value: "a" },
    { label: "Ampere", value: "b" },
    { label: "Ohm", value: "c" },
    { label: "Watt", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "41. Who is credited with the invention of the telephone?",
  answers: [
    { label: "Alexander Graham Bell", value: "a" },
    { label: "Thomas Edison", value: "b" },
    { label: "Nikola Tesla", value: "c" },
    { label: "Guglielmo Marconi", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "42. What is the study of the composition, properties, and behavior of matter called?",
  answers: [
    { label: "Biology", value: "a" },
    { label: "Physics", value: "b" },
    { label: "Chemistry", value: "c" },
    { label: "Geology", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "43. What is the unit of frequency?",
  answers: [
    { label: "Watt", value: "a" },
    { label: "Ampere", value: "b" },
    { label: "Hertz", value: "c" },
    { label: "Joule", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "44. Which scientist proposed the theory of general relativity?",
  answers: [
    { label: "Albert Einstein", value: "a" },
    { label: "Isaac Newton", value: "b" },
    { label: "Stephen Hawking", value: "c" },
    { label: "Galileo Galilei", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "45. What is the chemical symbol for the element Sodium?",
  answers: [
    { label: "Na", value: "a" },
    { label: "So", value: "b" },
    { label: "Si", value: "c" },
    { label: "No", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "46. What is the study of heredity and variation in organisms called?",
  answers: [
    { label: "Botany", value: "a" },
    { label: "Zoology", value: "b" },
    { label: "Genetics", value: "c" },
    { label: "Ecology", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "47. Who is credited with the discovery of penicillin?",
  answers: [
    { label: "Alexander Fleming", value: "a" },
    { label: "Marie Curie", value: "b" },
    { label: "Louis Pasteur", value: "c" },
    { label: "Robert Koch", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "48. What is the unit of measurement for energy?",
  answers: [
    { label: "Watt", value: "a" },
    { label: "Ampere", value: "b" },
    { label: "Joule", value: "c" },
    { label: "Volt", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "49. What is the process of converting light energy into electrical energy called?",
  answers: [
    { label: "Reflection", value: "a" },
    { label: "Refraction", value: "b" },
    { label: "Photosynthesis", value: "c" },
    { label: "Photovoltaic effect", value: "d" }
  ],
  correctAnswer: "d"
},
{
  question: "50. Which scientist is known for the discovery of radioactivity?",
  answers: [
    { label: "Marie Curie", value: "a" },
    { label: "Isaac Newton", value: "b" },
    { label: "Albert Einstein", value: "c" },
    { label: "Niels Bohr", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "51. What is the chemical symbol for the element Carbon?",
  answers: [
    { label: "Co", value: "a" },
    { label: "Ca", value: "b" },
    { label: "C", value: "c" },
    { label: "Cr", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "52. What is the study of the Earth's atmosphere called?",
  answers: [
    { label: "Meteorology", value: "a" },
    { label: "Geology", value: "b" },
    { label: "Biology", value: "c" },
    { label: "Astronomy", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "53. What is the unit of measurement for electric potential difference?",
  answers: [
    { label: "Ampere", value: "a" },
    { label: "Volt", value: "b" },
    { label: "Ohm", value: "c" },
    { label: "Watt", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "54. What is the process of converting light energy into chemical energy in plants called?",
  answers: [
    { label: "Chlorophyll", value: "a" },
    { label: "Photosynthesis", value: "b" },
    { label: "Respiration", value: "c" },
    { label: "Fermentation", value: "d" }
  ],
  correctAnswer: "b"
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
       <a href="#" class="currentpage"></a>
     </div>

     <?php include 'footer.php'; ?>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
              <script src="js/style.js"></script>
             
              </body>
              </html>

        