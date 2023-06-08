<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="title" content="crackmyquiz - General Knowledge Quiz">
  <meta name="description" content="Test your general knowledge with crackmyquiz General Knowledge Quiz! Take quizzes on various topics including GK, competitive exams, IBPS, Clerk, Punjab Patwari, Railway, SSC, and more. Challenge yourself and enhance your knowledge.">
  <meta name="keywords" content="CrackMyQuiz, quiz, general knowledge, competitive exams, IBPS, Clerk, Punjab Patwari, Railway, SSC">
  <meta name="author" content="CEO of crackmyquiz">
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
<h3 style="text-align: center; margin-top: 20px;">General Knowledge Quiz</h3>
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
        question: "1. What is the capital of Brazil? ",
        answers: [
          { label: "Brasilia", value: "a" },
          { label: "Rio de Janeiro ", value: "b" },
          { label: "Sao Paulo ", value: "c" },
          { label: "Salvador ", value: "d" }
        ],
        correctAnswer: "a"
      },
      {
       question: "2. Which of the following countries is not a member of the European Union? ",
       answers: [
          { label: "Germany", value: "a" },
          { label: "France", value: "b" },
          { label: "Switzerland", value: "c" },
          { label: "Italy", value: "d" }
       ],
       correctAnswer: "c"
     },
     {
       question: "3. What is the official language of Japan? ",
       answers: [
         { label: "Mandarin", value: "a" },
         { label: "Cantonese", value: "b" },
         { label: "Japanese", value: "c" },
         { label: "Korean", value: "d" }
       ],
       correctAnswer: "c"
     },
     {
        question: "4. Which of the following countries is the largest by land area? ",
        answers: [
          { label: "Russia", value: "a" },
          { label: "China", value: "b" },
          { label: "Canada", value: "c" },
          { label: "United States", value: "d" }
        ],
        correctAnswer: "a"
      },
            {
        question: "5. What is the currency of Switzerland? ",
        answers: [
          { label: "Euro", value: "a" },
          { label: "Swiss franc", value: "b" },
          { label: "US dollar", value: "c" },
          { label: "Pound sterling", value: "d" }
        ],
        correctAnswer: "b"
      },
      {
        question: "6. In which country is the Great Barrier Reef located?",
        answers: [
          { label: "Australia", value: "a" },
          { label: "Brazil", value: "b" },
          { label: "South Africa", value: "c" },
          { label: "Indonesia", value: "d" }
        ],
        correctAnswer: "a"
      },
      {
        question: "7. Which country is home to the tallest mountain in the world?",
        answers: [
          { label: "Nepal", value: "a" },
          { label: "China", value: "b" },
          { label: "India", value: "c" },
          { label: "Pakistan", value: "d" }
        ],
        correctAnswer: "a"
      },
      {
        question: "8. Which of the following countries is not in Africa?",
        answers: [
          { label: "Sudan", value: "a" },
          { label: "Madagascar", value: "b" },
          { label: "Chad", value: "c" },
          { label: "Paraguay", value: "d" }
        ],
        correctAnswer: "d"
      },
      {
        question: "9. What is the currency of Japan?",
        answers: [
          { label: "Yen", value: "a" },
          { label: "Dollar", value: "b" },
          { label: "Pound", value: "c" },
          { label: "Euro", value: "d" }
        ],
        correctAnswer: "a"
      },
      {
        question: "10. Which of the following countries is not a member of NATO?",
        answers: [
          { label: "United States", value: "a" },
          { label: "Canada", value: "b" },
          { label: "Russia", value: "c" },
          { label: "United Kingdom", value: "d" }
        ],
        correctAnswer: "c"
      },
      {
        question: "11. In what country would you find the ancient city of Petra?",
        answers: [
          { label: "Jordan", value: "a" },
          { label: "Syria", value: "b" },
          { label: "Turkey", value: "c" },
          { label: "Lebanon", value: "d" }
        ],
        correctAnswer: "a"
      },
      {
        question: "12. What is the national animal of Canada?",
        answers: [
          { label: "Grizzly bear", value: "a" },
          { label: "Moose", value: "b" },
          { label: "Bison", value: "c" },
          { label: "Beaver", value: "d" }
        ],
        correctAnswer: "d"
      },
      {
   question: "13. In which continent is the country of Kenya located? ",
   answers: [
      { label: "Asia", value: "a" },
      { label: "Africa", value: "b" },
      { label: "Europe", value: "c" },
      { label: "South America", value: "d" }
   ],
   correctAnswer: "b"
 },
 {
   question: "14. What is the currency of South Korea? ",
   answers: [
     { label: "Won", value: "a" },
     { label: "Yuan", value: "b" },
     { label: "Yen", value: "c" },
     { label: "Dollar", value: "d" }
   ],
   correctAnswer: "a"
 },
 {
    question: "15. What is the highest mountain in Africa? ",
    answers: [
      { label: "Kilimanjaro", value: "a" },
      { label: "Mount Everest", value: "b" },
      { label: "Mount McKinley", value: "c" },
      { label: "Mount Fuji", value: "d" }
    ],
    correctAnswer: "a"
  },
 {
    question: "16. Which of the following countries is the smallest by land area? ",
    answers: [
      { label: "Monaco", value: "a" },
      { label: "Nauru", value: "b" },
      { label: "Maldives", value: "c" },
      { label: "Bhutan", value: "d" }
    ],
    correctAnswer: "a"
  },
      {
      question: "17. Which country is both in Europe and Asia?",
    answers: [
    { label: "China", value: "a" },
    { label: "Russia", value: "b" },
    { label: "India", value: "c" },
    { label: "Australia", value: "d" }
    ],
    correctAnswer: "b"
    },
    {
        question: "18. Which river is the longest in the world?",
    answers: [
    { label: "Nile", value: "a" },
    { label: "Amazon", value: "b" },
    { label: "Yangtze", value: "c" },
    { label: "Mississippi", value: "d" }
    ],
    correctAnswer: "a"
    },
    {
      question: "19. Which country is known as the 'Land of the Rising Sun'?",
answers: [
{ label: "China", value: "a" },
{ label: "Japan", value: "b" },
{ label: "Thailand", value: "c" },
{ label: "South Korea", value: "d" }
],
correctAnswer: "b"
},
{
  question: "20. Which river is known as the 'Yellow River'?",
  answers: [
    { label: "Mekong River", value: "a" },
    { label: "Nile River", value: "b" },
    { label: "Yangtze River", value: "c" },
    { label: "Amazon River", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "21. What is the capital of Malaysia?",
  answers: [
    { label: "Kuala Lumpur", value: "a" },
    { label: "Jakarta", value: "b" },
    { label: "Bangkok", value: "c" },
    { label: "Manila", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "22. Which country is the largest producer of coffee in the world?",
  answers: [
    { label: "Colombia", value: "a" },
    { label: "Brazil", value: "b" },
    { label: "Vietnam", value: "c" },
    { label: "Ethiopia", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "23. What is the currency of Saudi Arabia?",
  answers: [
    { label: "Dinar", value: "a" },
    { label: "Rial", value: "b" },
    { label: "Riyal", value: "c" },
    { label: "Dirham", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "24. Which country has the largest population in the world?",
  answers: [
    { label: "United States", value: "a" },
    { label: "India", value: "b" },
    { label: "China", value: "c" },
    { label: "Russia", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "25. Which is the largest country in South America by land area?",
  answers: [
    { label: "Brazil", value: "a" },
    { label: "Argentina", value: "b" },
    { label: "Peru", value: "c" },
    { label: "Colombia", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "26. Which country is known as the 'Land of Thunder Dragon'?",
  answers: [
    { label: "Nepal", value: "a" },
    { label: "Bhutan", value: "b" },
    { label: "Tibet", value: "c" },
    { label: "Myanmar", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "27. Which is the world's largest desert?",
  answers: [
    { label: "Gobi Desert", value: "a" },
    { label: "Sahara Desert", value: "b" },
    { label: "Arabian Desert", value: "c" },
    { label: "Patagonian Desert", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "28. Which is the smallest country in Africa by land area?",
  answers: [
    { label: "Seychelles", value: "a" },
    { label: "Gambia", value: "b" },
    { label: "Cape Verde", value: "c" },
    { label: "Comoros", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "29. What is the capital of New Zealand?",
  answers: [
    { label: "Sydney", value: "a" },
    { label: "Melbourne", value: "b" },
    { label: "Wellington", value: "c" },
    { label: "Auckland", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "30. Which is the only continent to have all four seasons?",
  answers: [
    { label: "Europe", value: "a" },
    { label: "North America", value: "b" },
    { label: "Australia", value: "c" },
    { label: "Antarctica", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "31. Which is the highest waterfall in the world?",
  answers: [
    { label: "Angel Falls", value: "a" },
    { label: "Iguazu Falls", value: "b" },
    { label: "Niagara Falls", value: "c" },
    { label: "Victoria Falls", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "32. What is the capital of Mexico?",
  answers: [
    { label: "Monterrey", value: "a" },
    { label: "Mexico City", value: "b" },
    { label: "Guadalajara", value: "c" },
    { label: "Tijuana", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "33. Which is the largest landlocked country in the world?",
  answers: [
    { label: "Mongolia", value: "a" },
    { label: "Kazakhstan", value: "b" },
    { label: "Bolivia", value: "c" },
    { label: "Uzbekistan", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "34. What is the currency of Brazil?",
  answers: [
    { label: " Brazilian Real", value: "a" },
    { label: "Peso", value: "b" },
    { label: "Dollar", value: "c" },
    { label: "Euro", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "35. Which city is known as the 'City of Love'?",
  answers: [
    { label: "Paris", value: "a" },
    { label: "Venice", value: "b" },
    { label: "Rome", value: "c" },
    { label: "Barcelona", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "36. Which country is known as the 'Land of the Midnight Sun'?",
  answers: [
    { label: "Sweden", value: "a" },
    { label: "Norway", value: "b" },
    { label: "Finland", value: "c" },
    { label: "Denmark", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "37. What is the currency of Switzerland?",
  answers: [
    { label: "Euro", value: "a" },
    { label: "Pound", value: "b" },
    { label: "Franc", value: "c" },
    { label: "Dollar", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "38. Which is the largest country in the world by total area?",
  answers: [
    { label: "Russia", value: "a" },
    { label: "Canada", value: "b" },
    { label: "China", value: "c" },
    { label: "United States", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "39. What is the capital of Argentina?",
  answers: [
    { label: "Rio de Janeiro", value: "a" },
    { label: "Buenos Aires", value: "b" },
    { label: "Santiago", value: "c" },
    { label: "Lima", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "40. Which is the smallest continent by land area?",
  answers: [
    { label: "Europe", value: "a" },
    { label: "Australia", value: "b" },
    { label: "Asia", value: "c" },
    { label: "South America", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "41. What is the official language of Brazil?",
  answers: [
    { label: "Portuguese", value: "a" },
    { label: "Spanish", value: "b" },
    { label: "English", value: "c" },
    { label: "French", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "42. What is the capital city of Australia?",
answers: [
{ label: "Sydney", value: "a" },
{ label: "Melbourne", value: "b" },
{ label: "Canberra", value: "c" },
{ label: "Brisbane", value: "d" }
],
correctAnswer: "c"
},
{
  question: "43. What is the highest mountain peak in North America?",
answers: [
{ label: "Mount Kilimanjaro", value: "a" },
{ label: "Mount Everest", value: "b" },
{ label: "Denali (Mount McKinley)", value: "c" },
{ label: "Mount Aconcagua", value: "d" }
],
correctAnswer: "c"
},
{
question: "44. Which country has the world's largest economy?",
answers: [
{ label: "United States", value: "a" },
{ label: "China", value: "b" },
{ label: "Japan", value: "c" },
{ label: "Germany", value: "d" }
],
correctAnswer: "a"
},
{
  question: "45. What is the official language of Canada?",
answers: [
{ label: "English and Spanish", value: "a" },
{ label: "English and French", value: "b" },
{ label: "French and Spanish", value: "c" },
{ label: "English and German", value: "d" }
],
correctAnswer: "b"
},
{
  question: "46. Who painted the famous artwork 'Starry Night'?",
answers: [
{ label: "Vincent van Gogh", value: "a" },
{ label: "Leonardo da Vinci", value: "b" },
{ label: "Pablo Picasso", value: "c" },
{ label: "Salvador Dali", value: "d" }
],
correctAnswer: "a"
},
{
  question: "47. What is the national animal of Australia?",
answers: [
{ label: "Kangaroo", value: "a" },
{ label: "Koala", value: "b" },
{ label: "Emu", value: "c" },
{ label: "Platypus", value: "d" }
],
correctAnswer: "a"
},
{
  question: "48. Which country gifted the Statue of Liberty to the United States?",
answers: [
{ label: "France", value: "a" },
{ label: "Spain", value: "b" },
{ label: "England", value: "c" },
{ label: "Italy", value: "d" }
],
correctAnswer: "a"
},
{
  question: "49. Who wrote the novel '1984'?",
answers: [
{ label: "George Orwell", value: "a" },
{ label: "Aldous Huxley", value: "b" },
{ label: "F. Scott Fitzgerald", value: "c" },
{ label: "Ernest Hemingway", value: "d" }
],
correctAnswer: "a"
},
{
  question: "50. Who invented the telephone?",
answers: [
{ label: "Nikola Tesla", value: "a" },
{ label: "Alexander Graham Bell", value: "b" },
{ label: "Thomas Edison", value: "c" },
{ label: "Guglielmo Marconi", value: "d" }
],
correctAnswer: "b"
},
{
question: "51. What is the capital of Canada?",
answers: [
{ label: "Montreal", value: "a" },
{ label: "Vancouver", value: "b" },
{ label: "Toronto", value: "c" },
{ label: "Ottawa", value: "d" }
],
correctAnswer: "d"
},
{
  question: "52. Which country hosted the first Olympic Games?",
answers: [
{ label: "Greece", value: "a" },
{ label: "Italy", value: "b" },
{ label: "Spain", value: "c" },
{ label: "France", value: "d" }
],
correctAnswer: "a"
},
{
  question: "53. Which planet is known as the Red Planet?",
answers: [
{ label: "Venus", value: "a" },
{ label: "Mars", value: "b" },
{ label: "Jupiter", value: "c" },
{ label: "Saturn", value: "d" }
],
correctAnswer: "b"
},
{
  question: "54. Who wrote the famous novel 'War and Peace'?",
answers: [
{ label: "Leo Tolstoy", value: "a" },
{ label: "Fyodor Dostoevsky", value: "b" },
{ label: "Anton Chekhov", value: "c" },
{ label: "Nikolai Gogol", value: "d" }
],
correctAnswer: "a"
},
{
  question: "55. What is the largest ocean in the world?",
answers: [
{ label: "Atlantic Ocean", value: "a" },
{ label: "Indian Ocean", value: "b" },
{ label: "Pacific Ocean", value: "c" },
{ label: "Arctic Ocean", value: "d" }
],
correctAnswer: "c"
},
{
  question: "56. Who was the first person to walk on the moon?",
answers: [
{ label: "Neil Armstrong", value: "a" },
{ label: "Buzz Aldrin", value: "b" },
{ label: "Yuri Gagarin", value: "c" },
{ label: "Alan Shepard", value: "d" }
],
correctAnswer: "a"
},
{
  question: "57. Who painted the famous painting 'The Mona Lisa'?",
answers: [
{ label: "Michelangelo", value: "a" },
{ label: "Raphael", value: "b" },
{ label: "Leonardo da Vinci", value: "c" },
{ label: "Vincent van Gogh", value: "d" }
],
correctAnswer: "c"
},
{
  question: "58. What is the largest desert in the world?",
answers: [
{ label: "Sahara Desert", value: "a" },
{ label: "Arabian Desert", value: "b" },
{ label: "Gobi Desert", value: "c" },
{ label: "Antarctica", value: "d" }
],
correctAnswer: "d"
},
{
  question: "59. Who painted the famous work 'The Last Supper'?",
answers: [
{ label: "Michelangelo", value: "a" },
{ label: "Leonardo da Vinci", value: "b" },
{ label: "Raphael", value: "c" },
{ label: "Vincent van Gogh", value: "d" }
],
correctAnswer: "b"
},
{
  question: "60. Who wrote the novel 'To Kill a Mockingbird'?",
answers: [
{ label: "Harper Lee", value: "a" },
{ label: "J.K. Rowling", value: "b" },
{ label: "Stephen King", value: "c" },
{ label: "Charles Dickens", value: "d" }
],
correctAnswer: "a"
},
{
  question: "61. Which country is home to the ancient city of Petra?",
answers: [
{ label: "Egypt", value: "a" },
{ label: "Jordan", value: "b" },
{ label: "Lebanon", value: "c" },
{ label: "Iraq", value: "d" }
],
correctAnswer: "b"
},
{
  question: "62. Who wrote the novel 'The Great Gatsby'?",
answers: [
{ label: "Ernest Hemingway", value: "a" },
{ label: "F. Scott Fitzgerald", value: "b" },
{ label: "John Steinbeck", value: "c" },
{ label: "William Faulkner", value: "d" }
],
correctAnswer: "b"
},
{
  question: "63. Which country has the longest coastline in the world?",
answers: [
{ label: "Canada", value: "a" },
{ label: "Australia", value: "b" },
{ label: "Russia", value: "c" },
{ label: "Chile", value: "d" }
],
correctAnswer: "a"
},
{
  question: "64. In which country is the ancient city of Machu Picchu located?",
answers: [
{ label: "Mexico", value: "a" },
{ label: "Peru", value: "b" },
{ label: "Chile", value: "c" },
{ label: "Argentina", value: "d" }
],
correctAnswer: "b"
},
{
  question: "65. Which is the highest mountain peak in North America?",
answers: [
{ label: "Mount Everest", value: "a" },
{ label: "Mount Kilimanjaro", value: "b" },
{ label: "Mount Denali", value: "c" },
{ label: "Mount Kosciuszko", value: "d" }
],
correctAnswer: "c"
},
{
  question: "66. Which country is located on the southernmost point of the African continent?",
answers: [
{ label: "South Africa", value: "a" },
{ label: "Namibia", value: "b" },
{ label: "Botswana", value: "c" },
{ label: "Zimbabwe", value: "d" }
],
correctAnswer: "a"
},
{
  question: "67. Which is the largest lake in Africa?",
answers: [
{ label: "Lake Victoria", value: "a" },
{ label: "Lake Tanganyika", value: "b" },
{ label: "Lake Malawi", value: "c" },
{ label: "Lake Chad", value: "d" }
],
correctAnswer: "a"
},
{
  question: "68. Which two countries share the longest border in the world?",
answers: [
{ label: "Russia and China", value: "a" },
{ label: "United States and Canada", value: "b" },
{ label: "Argentina and Chile", value: "c" },
{ label: "India and Pakistan", value: "d" }
],
correctAnswer: "b"
},
{
  question: "69. Which country has the most number of time zones?",
answers: [
{ label: "China", value: "a" },
{ label: "United States", value: "b" },
{ label: "Russia", value: "c" },
{ label: "Brazil", value: "d" }
],
correctAnswer: "c"
},
{
  question: "70. Which country has the world's largest oil reserves?",
answers: [
{ label: "Saudi Arabia", value: "a" },
{ label: "Russia", value: "b" },
{ label: "Canada", value: "c" },
{ label: "United States", value: "d" }
],
correctAnswer: "a"
},
  {
question: "71. Which African country is known as the 'Land of a Thousand Hills'?",
answers: [
{ label: "Rwanda", value: "a" },
{ label: "Kenya", value: "b" },
{ label: "Nigeria", value: "c" },
{ label: "Egypt", value: "d" }
],
correctAnswer: "a"
},
{
question: "72. What is the capital of Peru?",
answers: [
{ label: "Lima", value: "a" },
{ label: "Bogotá", value: "b" },
{ label: "Quito", value: "c" },
{ label: "Santiago", value: "d" }
],
correctAnswer: "a"
},
{
question: "73. Which famous landmark is located in Agra, India?",
answers: [
{ label: "Eiffel Tower", value: "a" },
{ label: "Taj Mahal", value: "b" },
{ label: "Great Wall of China", value: "c" },
{ label: "Machu Picchu", value: "d" }
],
correctAnswer: "b"
},
{
question: "74. Which country is the world's largest producer of coffee?",
answers: [
{ label: "Brazil", value: "a" },
{ label: "Colombia", value: "b" },
{ label: "Vietnam", value: "c" },
{ label: "Indonesia", value: "d" }
],
correctAnswer: "a"
},
{
question: "75. Which country is the largest exporter of bananas in the world?",
answers: [
{ label: "Ecuador", value: "a" },
{ label: "Philippines", value: "b" },
{ label: "India", value: "c" },
{ label: "Costa Rica", value: "d" }
],
correctAnswer: "a"
},
{
question: "76. In which ocean is Madagascar located?",
answers: [
{ label: "Atlantic Ocean", value: "a" },
{ label: "Indian Ocean", value: "b" },
{ label: "Pacific Ocean", value: "c" },
{ label: "Arctic Ocean", value: "d" }
],
correctAnswer: "b"
},
{
question: "77. Which is the only continent without any desert?",
answers: [
{ label: "Africa", value: "a" },
{ label: "Europe", value: "b" },
{ label: "Asia", value: "c" },
{ label: "Antarctica", value: "d" }
],
correctAnswer: "d"
},
{
question: "78. Which is the largest country by area in South America?",
answers: [
{ label: "Brazil", value: "a" },
{ label: "Argentina", value: "b" },
{ label: "Peru", value: "c" },
{ label: "Colombia", value: "d" }
],
correctAnswer: "a"
},
{
question: "79. What is the largest island in the world?",
answers: [
{ label: "Greenland", value: "a" },
{ label: "Australia", value: "b" },
{ label: "Borneo", value: "c" },
{ label: "Madagascar", value: "d" }
],
correctAnswer: "a"
},
{
question: "80. Which city is known as the 'Eternal City'?",
answers: [
{ label: "Rome", value: "a" },
{ label: "Athens", value: "b" },
{ label: "Jerusalem", value: "c" },
{ label: "Damascus", value: "d" }
],
correctAnswer: "a"
},
{
  question: "81. What is the capital of Egypt?",
answers: [
{ label: "Cairo", value: "a" },
{ label: "Alexandria", value: "b" },
{ label: "Luxor", value: "c" },
{ label: "Aswan", value: "d" }
],
correctAnswer: "a"
},
{
question: "82. What is the currency of South Korea?",
answers: [
{ label: "Won", value: "a" },
{ label: "Dollar", value: "b" },
{ label: "Euro", value: "c" },
{ label: "Yen", value: "d" }
],
correctAnswer: "a"
},
{
question: "83. Which European country is divided into 26 cantons?",
answers: [
{ label: "Germany", value: "a" },
{ label: "Switzerland", value: "b" },
{ label: "France", value: "c" },
{ label: "Italy", value: "d" }
],
correctAnswer: "b"
},
{
  question: "84. What is the official language of the Netherlands?",
  answers: [
    { label: "Dutch", value: "a" },
    { label: "English", value: "b" },
    { label: "French", value: "c" },
    { label: "German", value: "d" }
  ],
  correctAnswer: "a"
},
{
question: "85. Which European country is known as the 'Land of a Thousand Lakes'?",
answers: [
{ label: "Norway", value: "a" },
{ label: "Finland", value: "b" },
{ label: "Sweden", value: "c" },
{ label: "Denmark", value: "d" }
],
correctAnswer: "b"
},
{
question: "86. In what city would you find the famous landmark known as the 'Golden Gate Bridge'?",
answers: [
{ label: "Los Angeles", value: "a" },
{ label: "San Francisco", value: "b" },
{ label: "Las Vegas", value: "c" },
{ label: "Seattle", value: "d" }
],
correctAnswer: "b"
},
{
question: "87. Which country is home to the world's longest river?",
answers: [
{ label: "Brazil", value: "a" },
{ label: "India", value: "b" },
{ label: "China", value: "c" },
{ label: "Egypt", value: "d" }
],
correctAnswer: "d"
},
{
question: "88. Which of the following animals can change its color?",
answers: [
{ label: "Octopus", value: "a" },
{ label: "Starfish", value: "b" },
{ label: "Jellyfish", value: "c" },
{ label: "Squid", value: "d" }
],
correctAnswer: "a"
},
{
question: "89. Which of the following animals is not a big cat?",
answers: [
{ label: "Leopard", value: "a" },
{ label: "Lion", value: "b" },
{ label: "Tiger", value: "c" },
{ label: "Cheetah", value: "d" }
],
correctAnswer: "a"
},
{
    question: "90. Which city is known as the 'City of Sails'?",
    answers: [
      { label: "Sydney", value: "a" },
      { label: "Auckland", value: "b" },
      { label: "San Francisco", value: "c" },
      { label: "Seattle", value: "d" }
    ],
    correctAnswer: "b"
  },
  {
question: "91. Which company developed the first AI program to defeat a world champion in the game of chess?",
answers: [
{ label: "Google", value: "a" },
{ label: "IBM", value: "b" },
{ label: "Microsoft", value: "c" },
{ label: "Apple", value: "d" }
],
correctAnswer: "b"
},

{
question: "92. Which AI system was developed by DeepMind and became the first to defeat a professional human player in the game of Go?",
answers: [
{ label: "AlphaGo", value: "a" },
{ label: "Watson", value: "b" },
{ label: "Siri", value: "c" },
{ label: "Cortana", value: "d" }
],
correctAnswer: "a"
},

{
question: "93. Which AI technology is used by Netflix to recommend movies and TV shows to its users?",
answers: [
{ label: "Reinforcement learning", value: "a" },
{ label: "Deep learning", value: "b" },
{ label: "Natural language processing", value: "c" },
{ label: "Collaborative filtering", value: "d" }
],
correctAnswer: "d"
},

{
question: "94. Which AI-powered virtual assistant was developed by Amazon?",
answers: [
{ label: "Alexa", value: "a" },
{ label: "Google Assistant", value: "b" },
{ label: "Siri", value: "c" },
{ label: "Cortana", value: "d" }
],
correctAnswer: "a"
},

{
question: "95. Which AI system developed by OpenAI can generate human-like text and has been criticized for its potential misuse?",
answers: [
{ label: "Watson", value: "a" },
{ label: "AlphaGo", value: "b" },
{ label: "GPT-3", value: "c" },
{ label: "Reinforcement learning", value: "d" }
],
correctAnswer: "c"
},
{
  question: "96. What is the name of the largest delta in the world, which is located in India?",
  answers: [
    { label: "Indus Delta", value: "a" },
    { label: "Ganges Delta", value: "b" },
    { label: "Niger Delta", value: "c" },
    { label: "Mekong Delta", value: "d" }
  ],
  correctAnswer: "b"
},

{
        question: "97. What is the largest organ of the human body? ",
        answers: [
            { label: "Liver", value: "a" },
            { label: "Skin", value: "b" },
            { label: "Heart", value: "c" },
            { label: "Brain", value: "d" }
        ],
        correctAnswer: "b"
      },
      {
        question: "98. Which scientist proposed the theory of relativity?",
        answers: [
        { label: "Albert Einstein", value: "a" },
        { label: "Isaac Newton", value: "b" },
        { label: "Charles Darwin", value: "c" },
        { label: "Marie Curie", value: "d" }
        ],
        correctAnswer: "a"
      },
      {
        question: "99. What is the chemical symbol for the element Iron?",
        answers: [
        { label: "Ir", value: "a" },
        { label: "Fe", value: "b" },
        { label: "In", value: "c" },
        { label: "Au", value: "d" }
        ],
        correctAnswer: "b"
    },
        {
        question: "100. What is the unit of electrical resistance?",
        answers: [
        { label: "Volt", value: "a" },
        { label: "Ohm", value: "b" },
        { label: "Watt", value: "c" },
        { label: "Ampere", value: "d" }
        ],
        correctAnswer: "b"
    },
 {
    question: "101. Which scientist discovered penicillin?",
    answers: [
      { label: "Alexander Fleming", value: "a" },
      { label: "Marie Curie", value: "b" },
      { label: "Galileo Galilei", value: "c" },
      { label: "Nikola Tesla", value: "d" }
    ],
    correctAnswer: "a"
  },
  {
  question: "102. Which element is the primary constituent of the Sun?",
  answers: [
    { label: "Helium", value: "a" },
    { label: "Hydrogen", value: "b" },
    { label: "Oxygen", value: "c" },
    { label: "Carbon", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "103. What is the unit of measurement for electric current?",
  answers: [
    { label: "Volt", value: "a" },
    { label: "Ampere", value: "b" },
    { label: "Watt", value: "c" },
    { label: "Ohm", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "104. Who is considered the father of modern computer science?",
  answers: [
    { label: "Alan Turing", value: "a" },
    { label: "Steve Jobs", value: "b" },
    { label: "Bill Gates", value: "c" },
    { label: "Mark Zuckerberg", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "105. What is the largest species of shark?",
  answers: [
    { label: "Great White Shark", value: "a" },
    { label: "Hammerhead Shark", value: "b" },
    { label: "Whale Shark", value: "c" },
    { label: "Tiger Shark", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "106. Which planet has the most moons?",
  answers: [
    { label: "Earth", value: "a" },
    { label: "Mars", value: "b" },
    { label: "Saturn", value: "c" },
    { label: "Jupiter", value: "d" }
  ],
  correctAnswer: "d"
},
{
  question: "107. What is the smallest unit of a chemical element?",
  answers: [
    { label: "Atom", value: "a" },
    { label: "Molecule", value: "b" },
    { label: "Cell", value: "c" },
    { label: "Nucleus", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "108. Which scientist developed the theory of general relativity?",
  answers: [
    { label: "Isaac Newton", value: "a" },
    { label: "Albert Einstein", value: "b" },
    { label: "Galileo Galilei", value: "c" },
    { label: "Nikola Tesla", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "109. What is the SI unit of force?",
  answers: [
    { label: "Newton", value: "a" },
    { label: "Watt", value: "b" },
    { label: "Joule", value: "c" },
    { label: "Kilogram", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "110. Which scientist proposed the laws of planetary motion?",
  answers: [
    { label: "Isaac Newton", value: "a" },
    { label: "Galileo Galilei", value: "b" },
    { label: "Johannes Kepler", value: "c" },
    { label: "Nicolaus Copernicus", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "111. What is the unit of measurement for frequency?",
  answers: [
    { label: "Hertz", value: "a" },
    { label: "Watt", value: "b" },
    { label: "Ampere", value: "c" },
    { label: "Ohm", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "112. What is the process of converting light energy into chemical energy called?",
  answers: [
    { label: "Photosynthesis", value: "a" },
    { label: "Respiration", value: "b" },
    { label: "Decomposition", value: "c" },
    { label: "Fermentation", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "113. Which scientist is known as the 'father of electricity'?",
  answers: [
    { label: "Thomas Edison", value: "a" },
    { label: "Nikola Tesla", value: "b" },
    { label: "Benjamin Franklin", value: "c" },
    { label: "Michael Faraday", value: "d" }
  ],
  correctAnswer: "d"
},
{
  question: "114. What is the chemical symbol for the element Sodium?",
  answers: [
    { label: "Na", value: "a" },
    { label: "So", value: "b" },
    { label: "Mg", value: "c" },
    { label: "K", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "115. Which planet is known as the 'Morning Star' or 'Evening Star'?",
  answers: [
    { label: "Venus", value: "a" },
    { label: "Mercury", value: "b" },
    { label: "Mars", value: "c" },
    { label: "Saturn", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "116. What is the study of heredity and variation in living organisms called?",
  answers: [
    { label: "Ecology", value: "a" },
    { label: "Genetics", value: "b" },
    { label: "Botany", value: "c" },
    { label: "Zoology", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "117. What is the unit of measurement for electric potential difference?",
  answers: [
    { label: "Watt", value: "a" },
    { label: "Ampere", value: "b" },
    { label: "Ohm", value: "c" },
    { label: "Volt", value: "d" }
  ],
  correctAnswer: "d"
},
{
  question: "118. Who is credited with discovering the double helix structure of DNA?",
  answers: [
    { label: "Francis Crick and James Watson", value: "a" },
    { label: "Rosalind Franklin", value: "b" },
    { label: "Gregor Mendel", value: "c" },
    { label: "Linus Pauling", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "119. What is the study of the Earth's atmosphere and weather called?",
  answers: [
    { label: "Geology", value: "a" },
    { label: "Meteorology", value: "b" },
    { label: "Astronomy", value: "c" },
    { label: "Climatology", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "120. What is the process of converting a liquid into a gas called?",
  answers: [
    { label: "Condensation", value: "a" },
    { label: "Evaporation", value: "b" },
    { label: "Sublimation", value: "c" },
    { label: "Melting", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "121. What is the study of fossils called?",
  answers: [
    { label: "Paleontology", value: "a" },
    { label: "Archaeology", value: "b" },
    { label: "Geology", value: "c" },
    { label: "Anthropology", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "122. What is the speed of light in a vacuum?",
  answers: [
    { label: "300,000 km/s", value: "a" },
    { label: "150,000 km/s", value: "b" },
    { label: "200,000 km/s", value: "c" },
    { label: "250,000 km/s", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "123. Which scientist developed the three laws of motion?",
  answers: [
    { label: "Albert Einstein", value: "a" },
    { label: "Isaac Newton", value: "b" },
    { label: "Galileo Galilei", value: "c" },
    { label: "Nikola Tesla", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "124. What is the chemical symbol for the element Gold?",
  answers: [
    { label: "Au", value: "a" },
    { label: "Ag", value: "b" },
    { label: "Pt", value: "c" },
    { label: "Cu", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "125. What is the process of plants converting sunlight into chemical energy called?",
  answers: [
    { label: "Photosynthesis", value: "a" },
    { label: "Respiration", value: "b" },
    { label: "Transpiration", value: "c" },
    { label: "Pollination", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "126. What is the study of the Earth's physical structure and substance called?",
  answers: [
    { label: "Geology", value: "a" },
    { label: "Meteorology", value: "b" },
    { label: "Astronomy", value: "c" },
    { label: "Biology", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "127. What is the SI unit of pressure?",
  answers: [
    { label: "Pascal", value: "a" },
    { label: "Newton", value: "b" },
    { label: "Watt", value: "c" },
    { label: "Joule", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "128. Who developed the theory of evolution by natural selection?",
  answers: [
    { label: "Charles Darwin", value: "a" },
    { label: "Gregor Mendel", value: "b" },
    { label: "Louis Pasteur", value: "c" },
    { label: "Marie Curie", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "129. What is the study of the interaction between organisms and their environment called?",
  answers: [
    { label: "Ecology", value: "a" },
    { label: "Genetics", value: "b" },
    { label: "Botany", value: "c" },
    { label: "Zoology", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "130. What is the unit of measurement for electrical resistance?",
  answers: [
    { label: "Ohm", value: "a" },
    { label: "Ampere", value: "b" },
    { label: "Watt", value: "c" },
    { label: "Volt", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "131. Which planet is known as the 'Red Planet'?",
  answers: [
    { label: "Venus", value: "a" },
    { label: "Mars", value: "b" },
    { label: "Jupiter", value: "c" },
    { label: "Saturn", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "132. What is the process of converting a solid directly into a gas called?",
  answers: [
    { label: "Condensation", value: "a" },
    { label: "Evaporation", value: "b" },
    { label: "Sublimation", value: "c" },
    { label: "Melting", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "133. What is the study of the motion of objects and the forces acting on them called?",
  answers: [
    { label: "Biology", value: "a" },
    { label: "Physics", value: "b" },
    { label: "Chemistry", value: "c" },
    { label: "Geology", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "134. What is the chemical symbol for the element Iron?",
  answers: [
    { label: "Fe", value: "a" },
    { label: "Ir", value: "b" },
    { label: "In", value: "c" },
    { label: "Au", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "135. Which scientist is known for the theory of relativity and the equation E=mc²?",
  answers: [
    { label: "Isaac Newton", value: "a" },
    { label: "Albert Einstein", value: "b" },
    { label: "Marie Curie", value: "c" },
    { label: "Max Planck", value: "d" }
  ],
  correctAnswer: "b"
},


{
  question: "136. What is the study of the composition, properties, and behavior of matter called?",
  answers: [
    { label: "Biology", value: "a" },
    { label: "Physics", value: "b" },
    { label: "Chemistry", value: "c" },
    { label: "Geology", value: "d" }
  ],
  correctAnswer: "c"
},

{
  question: "137. Which scientist proposed the theory of general relativity?",
  answers: [
    { label: "Albert Einstein", value: "a" },
    { label: "Isaac Newton", value: "b" },
    { label: "Stephen Hawking", value: "c" },
    { label: "Galileo Galilei", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "138. What is the chemical symbol for the element Sodium?",
  answers: [
    { label: "Na", value: "a" },
    { label: "So", value: "b" },
    { label: "Si", value: "c" },
    { label: "No", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "139. What is the study of heredity and variation in organisms called?",
  answers: [
    { label: "Botany", value: "a" },
    { label: "Zoology", value: "b" },
    { label: "Genetics", value: "c" },
    { label: "Ecology", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "140. Who is credited with the discovery of penicillin?",
  answers: [
    { label: "Alexander Fleming", value: "a" },
    { label: "Marie Curie", value: "b" },
    { label: "Louis Pasteur", value: "c" },
    { label: "Robert Koch", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "141. What is the unit of measurement for energy?",
  answers: [
    { label: "Watt", value: "a" },
    { label: "Ampere", value: "b" },
    { label: "Joule", value: "c" },
    { label: "Volt", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "142. What is the process of converting light energy into electrical energy called?",
  answers: [
    { label: "Reflection", value: "a" },
    { label: "Refraction", value: "b" },
    { label: "Photosynthesis", value: "c" },
    { label: "Photovoltaic effect", value: "d" }
  ],
  correctAnswer: "d"
},
{
  question: "143. Which scientist is known for the discovery of radioactivity?",
  answers: [
    { label: "Marie Curie", value: "a" },
    { label: "Isaac Newton", value: "b" },
    { label: "Albert Einstein", value: "c" },
    { label: "Niels Bohr", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "144. What is the chemical symbol for the element Carbon?",
  answers: [
    { label: "Co", value: "a" },
    { label: "Ca", value: "b" },
    { label: "C", value: "c" },
    { label: "Cr", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "145. What is the study of the Earth's atmosphere called?",
  answers: [
    { label: "Meteorology", value: "a" },
    { label: "Geology", value: "b" },
    { label: "Biology", value: "c" },
    { label: "Astronomy", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "146. What is the unit of measurement for electric potential difference?",
  answers: [
    { label: "Ampere", value: "a" },
    { label: "Volt", value: "b" },
    { label: "Ohm", value: "c" },
    { label: "Watt", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "147. Indian cancer research institute is located at ?",
  answers: [
    { label: "New Delhi", value: "a" },
    { label: "Kolkata", value: "b" },
    { label: "Gurugram", value: "c" },
    { label: "Mumbai", value: "d" }
  ],
  correctAnswer: "d"
},
{
  question: "148. The city of Nasik is situated on the bank of which one of the following rivers ?",
  answers: [
    { label: "Krishna", value: "a" },
    { label: "Mandovi", value: "b" },
    { label: "Godavari", value: "c" },
    { label: "Tapi", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "149. Which one of the following is soft?",
  answers: [
    { label: "Sodium", value: "a" },
    { label: "Iron", value: "b" },
    { label: "Lithium", value: "c" },
    { label: "Aluminium", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "150. Which one of the following cab be called as a part of the Service Sector?",
  answers: [
    { label: "Banking", value: "a" },
    { label: "Agriculture", value: "b" },
    { label: "Coal mines", value: "c" },
    { label: "Textile mills", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "151. The first Railway train 'ran' in India, from Bombay to Thane , on April 16 in?",
  answers: [
    { label: "1855", value: "a" },
    { label: "1853", value: "b" },
    { label: "1857", value: "c" },
    { label: "1947", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "152. What is the most universal form of transport?",
  answers: [
    { label: "Road", value: "a" },
    { label: "River", value: "b" },
    { label: "Railway", value: "c" },
    { label: "Pipeline", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "153. The National Design Institute is located at?",
  answers: [
    { label: "Patiala", value: "a" },
    { label: "Chandigarh", value: "b" },
    { label: "Dehradun", value: "c" },
    { label: "Ahmedabad", value: "d" }
  ],
  correctAnswer: "d"
},
{
  question: "154. Which of the following port is also called 'Jawaharlal Nehru Port'?",
  answers: [
    { label: "Chennai", value: "a" },
    { label: "Chandigarh", value: "b" },
    { label: "Navaseva", value: "c" },
    { label: "Kandla", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "155. Sikhism was found in '?",
  answers: [
    { label: "1000 AD", value: "a" },
    { label: "1500 AD", value: "b" },
    { label: "300 BC", value: "c" },
    { label: "1400 AD", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "156. When the design of Indian flag first adopted by the Government of India '?",
  answers: [
    { label: "July 22, 1947", value: "a" },
    { label: "August 15, 1947", value: "b" },
    { label: "Junuary 26, 1947", value: "c" },
    { label: "Midnight of August 14, 1947", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "157. Who was the founder of Arya Samaj ?",
  answers: [
    { label: "Swami Vivekananda", value: "a" },
    { label: "Swami Dayananda", value: "b" },
    { label: "Sri Shankaracharya", value: "c" },
    { label: "None of these", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "158. January 15 is celebrated as ?",
  answers: [
    { label: "Army Day", value: "a" },
    { label: "Makar Sakranti", value: "b" },
    { label: "Republic Day", value: "c" },
    { label: "Velentine Day", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "159. The first Indian woman to Commander a jet is ?",
  answers: [
    { label: "Seema Kapoor", value: "a" },
    { label: "Harpreet Ahluwalia", value: "b" },
    { label: "Niryat Rai", value: "c" },
    { label: "Saudamini Deshmukh", value: "d" }
  ],
  correctAnswer: "d"
},
{
  question: "160. 'Panchatantra' was written by?",
  answers: [
    { label: "Bhasa", value: "a" },
    { label: "Jaya Deva", value: "b" },
    { label: "Vishnu Sharma", value: "c" },
    { label: "Banabhatta", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "161. who was responsible for Jaliawala Bagh Tragedy?",
  answers: [
    { label: "J.F Rehill", value: "a" },
    { label: "O' Dwyer", value: "b" },
    { label: "General Dyer", value: "c" },
    { label: "Miles lrving", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "162. When was the Swadwshi Movement launched in India?",
  answers: [
    { label: "1919", value: "a" },
    { label: "1910", value: "b" },
    { label: "1905", value: "c" },
    { label: "1947", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "163. Who was called the modern Rishi?",
  answers: [
    { label: "Swami Ramdev", value: "a" },
    { label: "Swami Dayananda", value: "b" },
    { label: "B.G Tilak", value: "c" },
    { label: "M.G Ranade", value: "d" }
  ],
  correctAnswer: "d"
},
{
  question: "164. Izhewaz community was related to which state?",
  answers: [
    { label: "Kerala", value: "a" },
    { label: "Punjab", value: "b" },
    { label: "Manipur", value: "c" },
    { label: "Tamil Nadu", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "165. According to Gandhiji Harijan means",
  answers: [
    { label: "Children of God", value: "a" },
    { label: "People of God", value: "b" },
    { label: "People of Moon", value: "c" },
    { label: "Children of Sun", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "166. When was Remarriage Act Passed?",
  answers: [
    { label: "1853", value: "a" },
    { label: "1857", value: "b" },
    { label: "1818", value: "c" },
    { label: "1856", value: "d" }
  ],
  correctAnswer: "d"
},
{
  question: "167. Where did Raja Ram Mohan Roy take birth?",
  answers: [
    { label: "Kolkata", value: "a" },
    { label: "Delhi", value: "b" },
    { label: "Punjab", value: "c" },
    { label: "Nagaland", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "168. Who used the word 'Harijan' for low caste people?",
  answers: [
    { label: "Ambedkar", value: "a" },
    { label: "Kiran Bedi", value: "b" },
    { label: "Mahatma Gandhi", value: "c" },
    { label: "Jawahar Lal Nehru", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "160. Sati Pratha was:?",
  answers: [
    { label: "Woman was cremated with her husband", value: "a" },
    { label: "Woman was married again", value: "b" },
    { label: "Husband died at the death of wife", value: "c" },
    { label: "All", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "170. When was Sati Pratha banned?",
  answers: [
    { label: "1829", value: "a" },
    { label: "1838", value: "b" },
    { label: "1828", value: "c" },
    { label: "1836", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "171. Against whom Raja Ram Mohan Roy started his revolt?",
  answers: [
    { label: "Sati Pratha", value: "a" },
    { label: "Caste System", value: "b" },
    { label: "Parda Pratha", value: "c" },
    { label: "Polygamy System", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "172. The meaning of Sati?",
  answers: [
    { label: "Brave lady", value: "a" },
    { label: "Honest lady", value: "b" },
    { label: "True lady", value: "c" },
    { label: "None", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "173. Who was governor-general when the 1857 revolt broke out?",
  answers: [
    { label: "Dalhousie", value: "a" },
    { label: "Canning", value: "b" },
    { label: "Curzon", value: "c" },
    { label: "Lawrence", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "174. Who was governor-general when the 1857 revolt broke out?",
  answers: [
    { label: "Dalhousie", value: "a" },
    { label: "Canning", value: "b" },
    { label: "Curzon", value: "c" },
    { label: "Lawrence", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "175. Who was the first martyr of 1857 revolt?",
  answers: [
    { label: "Bahadur Shah", value: "a" },
    { label: "Tantya Tope", value: "b" },
    { label: "Mangal Pandey", value: "c" },
    { label: "Rani Jhansi", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "176. Who was the founder of Permanent Settlement?",
  answers: [
    { label: "Thomas Munro", value: "a" },
    { label: "Lord Carnwalis", value: "b" },
    { label: "George Barlow", value: "c" },
    { label: "Captain Read", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "177. Who was the author of Geet Gobind?",
  answers: [
    { label: "Vidyapati", value: "a" },
    { label: "Surdas", value: "b" },
    { label: "Jaya Deva", value: "c" },
    { label: "Mirabai", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "178. The book Geography is written by:?",
  answers: [
    { label: "Herdotus", value: "a" },
    { label: "Aristotle", value: "b" },
    { label: "Tolstoy", value: "c" },
    { label: "Eretoskhneej", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "179. The term 'nife' refers to:?",
  answers: [
    { label: "Earthquakes", value: "a" },
    { label: "Core of the earth", value: "b" },
    { label: "Crust of the earth", value: "c" },
    { label: "Humboldt Current", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "180. The total area of India is about:?",
  answers: [
    { label: "31 lakh sq. km", value: "a" },
    { label: "33 lakh sq. km", value: "b" },
    { label: "32 lakh sq. km", value: "c" },
    { label: "35 lakh sq. km", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "181. The is the air weight is called:?",
  answers: [
    { label: "Atmosphere", value: "a" },
    { label: "Air Pressure", value: "b" },
    { label: "Air Waves", value: "c" },
    { label: "None of these", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "182. Nehru Stadium is located at:?",
  answers: [
    { label: "Kolkata", value: "a" },
    { label: "Mumbai", value: "b" },
    { label: "Chennai", value: "c" },
    { label: "New Delhi", value: "d" }
  ],
  correctAnswer: "d"
},
{
  question: "183. 'Shivaji' Hockey Stadium is located at:?",
  answers: [
    { label: "Mumbai", value: "a" },
    { label: "Chennai", value: "b" },
    { label: "Kanpur", value: "c" },
    { label: "New Delhi", value: "d" }
  ],
  correctAnswer: "d"
},
{
  question: "184. Aga khan cup is associated with:?",
  answers: [
    { label: "Hockey", value: "a" },
    { label: "Football", value: "b" },
    { label: "Polo", value: "c" },
    { label: "Crickey", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "185. Davis cup is associated with:?",
  answers: [
    { label: "Hockey", value: "a" },
    { label: "Lawn Tennis", value: "b" },
    { label: "Polo", value: "c" },
    { label: "Crickey", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "186. Durand cup is associated with:?",
  answers: [
    { label: "Hockey", value: "a" },
    { label: "Lawn Tennis", value: "b" },
    { label: "Football", value: "c" },
    { label: "Crickey", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "187. Rangaswami cup is associated with:?",
  answers: [
    { label: "National Hockey Championship", value: "a" },
    { label: "Lawn Tennis", value: "b" },
    { label: "Football", value: "c" },
    { label: "Crickey", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "188. Dhyan Chand Trophy is associated with:?",
  answers: [
    { label: "Hockey", value: "a" },
    { label: "Lawn Tennis", value: "b" },
    { label: "Football", value: "c" },
    { label: "Crickey", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "189. Rubella virus causes:?",
  answers: [
    { label: "Chicken pox", value: "a" },
    { label: "Measles", value: "b" },
    { label: "Small pox", value: "c" },
    { label: "Mumps", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "190. Which vitamin helps in the clotting of blood:?",
  answers: [
    { label: "Vitamin A", value: "a" },
    { label: "Vitamin D", value: "b" },
    { label: "Vitamin C", value: "c" },
    { label: "Vitamin E", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "191. The disease which is known as Break borne fever:?",
  answers: [
    { label: "JE", value: "a" },
    { label: "Dengue", value: "b" },
    { label: "Typhoid", value: "c" },
    { label: "Measles", value: "d" }
  ],
  correctAnswer: "d"
},
{
  question: "192. Which one is a viral disease?",
  answers: [
    { label: "Cholera", value: "a" },
    { label: "Typhoid", value: "b" },
    { label: "Rabies", value: "c" },
    { label: "Whooping cough", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "193. Which one is a viral disease?",
  answers: [
    { label: "Cholera", value: "a" },
    { label: "Typhoid", value: "b" },
    { label: "Rabies", value: "c" },
    { label: "Whooping cough", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "194. During AIDS how many cells are reduced:?",
  answers: [
    { label: "Till Eight", value: "a" },
    { label: "Till Hundred", value: "b" },
    { label: "Till Tenth", value: "c" },
    { label: "Till Thousand", value: "d" }
  ],
  correctAnswer: "d"
},
{
  question: "195. The useful age of atom plant is:?",
  answers: [
    { label: "3 year", value: "a" },
    { label: "6 year", value: "b" },
    { label: "24 year", value: "c" },
    { label: "12 year", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "196. The number of birds in the world is:?",
  answers: [
    { label: "86000", value: "a" },
    { label: "60000", value: "b" },
    { label: "12000", value: "c" },
    { label: "78000", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "197. The forest are source of:?",
  answers: [
    { label: "Air", value: "a" },
    { label: "Natural", value: "b" },
    { label: "Water", value: "c" },
    { label: "All of the above", value: "d" }
  ],
  correctAnswer: "b"
},
{
  question: "198. Which is we use as fuel:?",
  answers: [
    { label: "Petrol", value: "a" },
    { label: "Coal", value: "b" },
    { label: "Diesel", value: "c" },
    { label: "All of the above", value: "d" }
  ],
  correctAnswer: "d"
},
{
  question: "199. Which months in India 80% rain comes:?",
  answers: [
    { label: "January to March", value: "a" },
    { label: "April to August", value: "b" },
    { label: "June to September", value: "c" },
    { label: "None of these", value: "d" }
  ],
  correctAnswer: "c"
},
{
  question: "200. Tree make our air:?",
  answers: [
    { label: "Pure", value: "a" },
    { label: "Dirty", value: "b" },
    { label: "Polluted", value: "c" },
    { label: "None of these", value: "d" }
  ],
  correctAnswer: "a"
},
{
  question: "201. Climate effects most:?",
  answers: [
    { label: "Vegitable", value: "a" },
    { label: "Work", value: "b" },
    { label: "Crops", value: "c" },
    { label: "All of these", value: "d" }
  ],
  correctAnswer: "d"
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

        