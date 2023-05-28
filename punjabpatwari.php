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
<h3 style="text-align: center; margin-top: 20px;">Quiz for Punjab Patwari Exam</h3>
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
  "question": "1. Which is the capital city of Punjab, India?",
  "answers": [
    { "label": "Chandigarh", "value": "a" },
    { "label": "Amritsar", "value": "b" },
    { "label": "Ludhiana", "value": "c" },
    { "label": "Jalandhar", "value": "d" }
  ],
  "correctAnswer": "a"
},
{
  "question": "2. The famous Golden Temple is located in which city of Punjab?",
  "answers": [
    { "label": "Ludhiana", "value": "a" },
    { "label": "Amritsar", "value": "b" },
    { "label": "Jalandhar", "value": "c" },
    { "label": "Patiala", "value": "d" }
  ],
  "correctAnswer": "b"
},
{
  "question": "3. Who was the first Sikh guru?",
  "answers": [
    { "label": "Guru Nanak Dev", "value": "a" },
    { "label": "Guru Gobind Singh", "value": "b" },
    { "label": "Guru Angad Dev", "value": "c" },
    { "label": "Guru Ram Das", "value": "d" }
  ],
  "correctAnswer": "a"
},
{
  "question": "4. Which folk dance form is associated with Punjab?",
  "answers": [
    { "label": "Kathak", "value": "a" },
    { "label": "Bhangra", "value": "b" },
    { "label": "Kuchipudi", "value": "c" },
    { "label": "Odissi", "value": "d" }
  ],
  "correctAnswer": "b"
},
{
  "question": "5. The famous festival of Punjab, celebrated with great enthusiasm, is known as?",
  "answers": [
    { "label": "Diwali", "value": "a" },
    { "label": "Holi", "value": "b" },
    { "label": "Baisakhi", "value": "c" },
    { "label": "Navratri", "value": "d" }
  ],
  "correctAnswer": "c"
},
{
  "question": "6. Which river flows through the state of Punjab?",
  "answers": [
    { "label": "Yamuna", "value": "a" },
    { "label": "Ganges", "value": "b" },
    { "label": "Sutlej", "value": "c" },
    { "label": "Brahmaputra", "value": "d" }
  ],
  "correctAnswer": "c"
},
{
  "question": "7. Who is the current Chief Minister of Punjab?",
  "answers": [
    { "label": "Captain Amarinder Singh", "value": "a" },
    { "label": "Parkash Singh Badal", "value": "b" },
    { "label": "Bhagwant Maan", "value": "c" },
    { "label": "Manpreet Singh Badal", "value": "d" }
  ],
  "correctAnswer": "c"
},
{
  "question": "8. Which city in Punjab is famous for its sports industry?",
  "answers": [
    { "label": "Ludhiana", "value": "a" },
    { "label": "Amritsar", "value": "b" },
    { "label": "Jalandhar", "value": "c" },
    { "label": "Patiala", "value": "d" }
  ],
  "correctAnswer": "c"
},
{
  "question": "9. The famous Wagah Border, a popular tourist attraction, is located between India and which country?",
  "answers": [
    { "label": "Pakistan", "value": "a" },
    { "label": "China", "value": "b" },
    { "label": "Bangladesh", "value": "c" },
    { "label": "Nepal", "value": "d" }
  ],
  "correctAnswer": "a"
},
{
  "question": "10. Who is known as the 'Lion of Punjab'?",
  "answers": [
    { "label": "Bhagat Singh", "value": "a" },
    { "label": "Maharaja Ranjit Singh", "value": "b" },
    { "label": "Lala Lajpat Rai", "value": "c" },
    { "label": "Shaheed Udham Singh", "value": "d" }
  ],
  "correctAnswer": "b"
},
{
  "question": "11. Which is the largest district in Punjab by area?",
  "answers": [
    { "label": "Ludhiana", "value": "a" },
    { "label": "Amritsar", "value": "b" },
    { "label": "Ferozepur", "value": "c" },
    { "label": "Patiala", "value": "d" }
  ],
  "correctAnswer": "c"
},
{
  "question": "12. The famous Harmandir Sahib is popularly known as?",
  "answers": [
    { "label": "Akal Takht", "value": "a" },
    { "label": "Hemkund Sahib", "value": "b" },
    { "label": "Anandpur Sahib", "value": "c" },
    { "label": "Golden Temple", "value": "d" }
  ],
  "correctAnswer": "d"
},
{
  "question": "13. Who is the famous Punjabi singer known as the 'King of Bhangra'?",
  "answers": [
    { "label": "Gurdas Maan", "value": "a" },
    { "label": "Diljit Dosanjh", "value": "b" },
    { "label": "Yo Yo Honey Singh", "value": "c" },
    { "label": "Babbu Maan", "value": "d" }
  ],
  "correctAnswer": "a"
},
{
  "question": "14. Which city in Punjab is known as the 'Manchester of India'?",
  "answers": [
    { "label": "Amritsar", "value": "a" },
    { "label": "Ludhiana", "value": "b" },
    { "label": "Jalandhar", "value": "c" },
    { "label": "Patiala", "value": "d" }
  ],
  "correctAnswer": "b"
},
{
  "question": "15. Who is the famous Punjabi poet and philosopher known as the 'Bard of Punjab'?",
  "answers": [
    { "label": "Shiv Kumar Batalvi", "value": "a" },
    { "label": "Baba Farid", "value": "b" },
    { "label": "Bulleh Shah", "value": "c" },
    { "label": "Surjit Patar", "value": "d" }
  ],
  "correctAnswer": "c"
},
{
  "question": "16. Which is the traditional Punjabi cuisine that consists of stuffed flatbread?",
  "answers": [
    { "label": "Paratha", "value": "a" },
    { "label": "Naan", "value": "b" },
    { "label": "Roti", "value": "c" },
    { "label": "Makki di Roti", "value": "d" }
  ],
  "correctAnswer": "d"
},
{
  "question": "17. Which historic battle took place in Punjab that marked the end of Sikh independence in India?",
  "answers": [
    { "label": "Battle of Panipat", "value": "a" },
    { "label": "Battle of Plassey", "value": "b" },
    { "label": "Battle of Chamkaur Sahib", "value": "c" },
    { "label": "Battle of Buxar", "value": "d" }
  ],
  "correctAnswer": "a"
},
{
  "question": "18. The famous Punjabi agricultural festival, 'Kisan Mela', is organized by which university?",
  "answers": [
    { "label": "Punjab Agricultural University", "value": "a" },
    { "label": "Guru Nanak Dev University", "value": "b" },
    { "label": "Panjab University", "value": "c" },
    { "label": "Thapar University", "value": "d" }
  ],
  "correctAnswer": "a"
},
{
  "question": "19. Which Punjabi folk instrument is commonly associated with Bhangra music?",
  "answers": [
    { "label": "Tabla", "value": "a" },
    { "label": "Sarangi", "value": "b" },
    { "label": "Dhol", "value": "c" },
    { "label": "Harmonium", "value": "d" }
  ],
  "correctAnswer": "c"
},
{
  "question": "20. Who was the founder of the Sikh empire in Punjab?",
  "answers": [
    { "label": "Banda Singh Bahadur", "value": "a" },
    { "label": "Maharaja Ranjit Singh", "value": "b" },
    { "label": "Guru Gobind Singh", "value": "c" },
    { "label": "Baba Deep Singh", "value": "d" }
  ],
  "correctAnswer": "b"
},
{
  "question": "21. The famous festival of 'Hola Mohalla' is celebrated in which city of Punjab?",
  "answers": [
    { "label": "Anandpur Sahib", "value": "a" },
    { "label": "Fatehgarh Sahib", "value": "b" },
    { "label": "Tarn Taran", "value": "c" },
    { "label": "Sri Muktsar Sahib", "value": "d" }
  ],
  "correctAnswer": "a"
},
{
  "question": "22. Which Punjabi singer is popularly known as the 'Voice of Punjab'?",
  "answers": [
    { "label": "Jazzy B", "value": "a" },
    { "label": "Gurdas Maan", "value": "b" },
    { "label": "Parmish Verma", "value": "c" },
    { "label": "Satinder Sartaaj", "value": "d" }
  ],
  "correctAnswer": "b"
},
{
  "question": "23. Which historic city in Punjab is known for its magnificent Qila Mubarak?",
  "answers": [
    { "label": "Faridkot", "value": "a" },
    { "label": "Patiala", "value": "b" },
    { "label": "Bathinda", "value": "c" },
    { "label": "Kapurthala", "value": "d" }
  ],
  "correctAnswer": "b"
},
{
  "question": "24. Which city in Punjab is famous for its annual 'Rose Festival'?",
  "answers": [
    { "label": "Ludhiana", "value": "a" },
    { "label": "Amritsar", "value": "b" },
    { "label": "Chandigarh", "value": "c" },
    { "label": "Patiala", "value": "d" }
  ],
  "correctAnswer": "c"
},
{
  "question": "25. Who is the famous Punjabi poet and writer known for his work 'Heer Ranjha'?",
  "answers": [
    { "label": "Waris Shah", "value": "a" },
    { "label": "Amrita Pritam", "value": "b" },
    { "label": "Surjit Patar", "value": "c" },
    { "label": "Shiv Kumar Batalvi", "value": "d" }
  ],
  "correctAnswer": "a"
},
{
  "question": "26. Which city in Punjab is known as the 'City of Gardens'?",
  "answers": [
    { "label": "Patiala", "value": "a" },
    { "label": "Chandigarh", "value": "b" },
    { "label": "Amritsar", "value": "c" },
    { "label": "Jalandhar", "value": "d" }
  ],
  "correctAnswer": "b"
},
{
  "question": "27. Which Punjabi dance form is characterized by vibrant movements and energetic beats?",
  "answers": [
    { "label": "Giddha", "value": "a" },
    { "label": "Bhangra", "value": "b" },
    { "label": "Jhumar", "value": "c" },
    { "label": "Sammi", "value": "d" }
  ],
  "correctAnswer": "b"
},
{
  "question": "28. Who was the first Sikh guru and the founder of Sikhism?",
  "answers": [
    { "label": "Guru Angad Dev", "value": "a" },
    { "label": "Guru Nanak Dev", "value": "b" },
    { "label": "Guru Gobind Singh", "value": "c" },
    { "label": "Guru Har Rai", "value": "d" }
  ],
  "correctAnswer": "b"
},
{
  "question": "29. Which city in Punjab is known as the 'City of Education'?",
  "answers": [
    { "label": "Ludhiana", "value": "a" },
    { "label": "Jalandhar", "value": "b" },
    { "label": "Amritsar", "value": "c" },
    { "label": "Patiala", "value": "d" }
  ],
  "correctAnswer": "d"
},
{
  "question": "30. Which city in Punjab is known as the 'City of Education'?",
  "answers": [
    { "label": "Ludhiana", "value": "a" },
    { "label": "Jalandhar", "value": "b" },
    { "label": "Amritsar", "value": "c" },
    { "label": "Patiala", "value": "d" }
  ],
  "correctAnswer": "d"
},
{
  "question": "31. The famous 'Jallianwala Bagh' massacre took place in which city of Punjab?",
  "answers": [
    { "label": "Ludhiana", "value": "a" },
    { "label": "Amritsar", "value": "b" },
    { "label": "Patiala", "value": "c" },
    { "label": "Jalandhar", "value": "d" }
  ],
  "correctAnswer": "b"
},
{
  "question": "32. Which famous Punjabi festival marks the birth anniversary of Guru Nanak Dev?",
  "answers": [
    { "label": "Lohri", "value": "a" },
    { "label": "Gurpurab", "value": "b" },
    { "label": "Baisakhi", "value": "c" },
    { "label": "Hola Mohalla", "value": "d" }
  ],
  "correctAnswer": "b"
},
{
  "question": "33. The 'Virasat-e-Khalsa' museum, showcasing Sikh history, is located in which city of Punjab?",
  "answers": [
    { "label": "Amritsar", "value": "a" },
    { "label": "Chandigarh", "value": "b" },
    { "label": "Patiala", "value": "c" },
    { "label": "Anandpur Sahib", "value": "d" }
  ],
  "correctAnswer": "d"
},
{
  "question": "34. Which Punjabi singer is popularly known as the 'Melody Queen'?",
  "answers": [
    { "label": "Nooran Sisters", "value": "a" },
    { "label": "Miss Pooja", "value": "b" },
    { "label": "Neha Kakkar", "value": "c" },
    { "label": "Satinder Sartaaj", "value": "d" }
  ],
  "correctAnswer": "a"
},
{
  "question": "35. The famous Golden Temple is also known as ________ in Punjabi.",
  "answers": [
    { "label": "Sri Harmandir Sahib", "value": "a" },
    { "label": "Gurudwara Nanak Dev Ji", "value": "b" },
    { "label": "Takht Sri Patna Sahib", "value": "c" },
    { "label": "Gurudwara Bangla Sahib", "value": "d" }
  ],
  "correctAnswer": "a"
},
{
  "question": "36. Which Punjabi folk dance is performed by women during harvest season?",
  "answers": [
    { "label": "Bhangra", "value": "a" },
    { "label": "Giddha", "value": "b" },
    { "label": "Jhumar", "value": "c" },
    { "label": "Sammi", "value": "d" }
  ],
  "correctAnswer": "b"
},
{
  "question": "37. The famous 'Punjab Agricultural University' is located in which city of Punjab?",
  "answers": [
    { "label": "Ludhiana", "value": "a" },
    { "label": "Amritsar", "value": "b" },
    { "label": "Chandigarh", "value": "c" },
    { "label": "Patiala", "value": "d" }
  ],
  "correctAnswer": "a"
},
{
  "question": "38. Which Punjabi dish is a popular street food made with gram flour and served with chutney?",
  "answers": [
    { "label": "Sarson ka Saag", "value": "a" },
    { "label": "Makki di Roti", "value": "b" },
    { "label": "Amritsari Kulcha", "value": "c" },
    { "label": "Chole Bhature", "value": "d" }
  ],
  "correctAnswer": "d"
},
{
  "question": "39. Which city in Punjab is famous for its traditional 'Phulkari' embroidery?",
  "answers": [
    { "label": "Ludhiana", "value": "a" },
    { "label": "Amritsar", "value": "b" },
    { "label": "Jalandhar", "value": "c" },
    { "label": "Patiala", "value": "d" }
  ],
  "correctAnswer": "d"
},
{
  "question": "40. Which Sikh festival celebrates the harvest season and marks the start of the solar year?",
  "answers": [
    { "label": "Lohri", "value": "a" },
    { "label": "Vaisakhi", "value": "b" },
    { "label": "Gurpurab", "value": "c" },
    { "label": "Hola Mohalla", "value": "d" }
  ],
  "correctAnswer": "b"
},
{
  "question": "41. The famous 'Fateh Burj' is the tallest victory tower in India and is located in which city of Punjab?",
  "answers": [
    { "label": "Patiala", "value": "a" },
    { "label": "Amritsar", "value": "b" },
    { "label": "Mohali", "value": "c" },
    { "label": "Chandigarh", "value": "d" }
  ],
  "correctAnswer": "a"
},
{
  "question": "42. Who is the famous Punjabi singer known as the 'Voice of Punjab'?",
  "answers": [
    { "label": "Gurdas Maan", "value": "a" },
    { "label": "Diljit Dosanjh", "value": "b" },
    { "label": "Satinder Sartaaj", "value": "c" },
    { "label": "Parmish Verma", "value": "d" }
  ],
  "correctAnswer": "a"
},
{
  "question": "43. The 'Harike Wetland' in Punjab is a famous bird sanctuary located in which district?",
  "answers": [
    { "label": "Amritsar", "value": "a" },
    { "label": "Kapurthala", "value": "b" },
    { "label": "Ferozepur", "value": "c" },
    { "label": "Ludhiana", "value": "d" }
  ],
  "correctAnswer": "c"
},
{
  "question": "44. The famous 'Virasat-e-Khalsa' museum is dedicated to which Sikh Guru?",
  "answers": [
    { "label": "Guru Nanak Dev", "value": "a" },
    { "label": "Guru Gobind Singh", "value": "b" },
    { "label": "Guru Ram Das", "value": "c" },
    { "label": "Guru Arjan Dev", "value": "d" }
  ],
  "correctAnswer": "b"
},
{
  "question": "45. The historical 'Anandpur Sahib' is associated with which Sikh festival?",
  "answers": [
    { "label": "Gurpurab", "value": "a" },
    { "label": "Hola Mohalla", "value": "b" },
    { "label": "Baisakhi", "value": "c" },
    { "label": "Lohri", "value": "d" }
  ],
  "correctAnswer": "b"
},
{
  "question": "46. Who is known as the 'Flying Sikh' and hails from Punjab?",
  "answers": [
    { "label": "Milkha Singh", "value": "a" },
    { "label": "Gurbachan Singh Randhawa", "value": "b" },
    { "label": "Man Kaur", "value": "c" },
    { "label": "Harbhajan Singh", "value": "d" }
  ],
  "correctAnswer": "a"
},
{
  "question": "47. Which Punjabi dish is made from mustard leaves and often served with 'Makki di Roti'?",
  "answers": [
    { "label": "Sarson ka Saag", "value": "a" },
    { "label": "Butter Chicken", "value": "b" },
    { "label": "Aloo Paratha", "value": "c" },
    { "label": "Paneer Tikka", "value": "d" }
  ],
  "correctAnswer": "a"
},
{
  "question": "48. The 'Phagwara' city of Punjab is known for which famous educational institution?",
  "answers": [
    { "label": "Punjab Agricultural University", "value": "a" },
    { "label": "Thapar Institute of Engineering and Technology", "value": "b" },
    { "label": "Lovely Professional University", "value": "c" },
    { "label": "Guru Nanak Dev University", "value": "d" }
  ],
  "correctAnswer": "c"
},
{
  "question": "49. The 'Shaheed Bhagat Singh Museum' is located in which city of Punjab?",
  "answers": [
    { "label": "Amritsar", "value": "a" },
    { "label": "Ludhiana", "value": "b" },
    { "label": "Jalandhar", "value": "c" },
    { "label": "Ferozepur", "value": "d" }
  ],
  "correctAnswer": "c"
},
{
  "question": "50. Which Punjabi city is famous for its traditional 'Juttis' (handcrafted shoes)?",
  "answers": [
    { "label": "Patiala", "value": "a" },
    { "label": "Amritsar", "value": "b" },
    { "label": "Ludhiana", "value": "c" },
    { "label": "Jalandhar", "value": "d" }
  ],
  "correctAnswer": "b"
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

        