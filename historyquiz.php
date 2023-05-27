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
<h3 style="text-align: center; margin-top: 20px;">History Quiz</h3>
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
        "question": "1. Which country was the first to send a human into space?",
        "answers": [
        {"label": "China", "value": "a"},
        {"label": "United States", "value": "b"},
        {"label": "Soviet Union", "value": "c"},
        {"label": "China", "value": "d"}
        ],
        "correctAnswer": "c"
        },
        {
        "question": "2. Who was the first Roman Emperor?",
        "answers": [
        {"label": "Peter", "value": "a"},
        {"label": "Julius Caesar", "value": "b"},
        {"label": "Augustus", "value": "c"},
        {"label": "Nero", "value": "d"}
        ],
        "correctAnswer": "c"
        },
        {
        "question": "3. In which year did the Industrial Revolution begin?",
        "answers": [
        {"label": "1919", "value": "a"},
        {"label": "1750", "value": "b"},
        {"label": "1800", "value": "c"},
        {"label": "1900", "value": "d"}
        ],
        "correctAnswer": "b"
        },
        {
        "question": "4. Who painted the Mona Lisa?",
        "answers": [
        {"label": "John da Vinci", "value": "a"},
        {"label": "Leonardo da Vinci", "value": "b"},
        {"label": "Pablo Picasso", "value": "c"},
        {"label": "Vincent van Gogh", "value": "d"}
        ],
        "correctAnswer": "b"
        },
        {
        "question": "5. Which event marked the beginning of World War II?",
        "answers": [
        {"label": "Bombing of Ontario", "value": "a"},
        {"label": "Attack on Pearl Harbor", "value": "b"},
        {"label": "Invasion of Poland", "value": "c"},
        {"label": "Bombing of Hiroshima", "value": "d"}
        ],
        "correctAnswer": "c"
        },
        {
        "question": "6. Who was the first woman to win a Nobel Prize?",
        "answers": [
        {"label": "Kiran Bedi", "value": "a"},
        {"label": "Marie Curie", "value": "b"},
        {"label": "Rosa Parks", "value": "c"},
        {"label": "Mother Teresa", "value": "d"}
        ],
        "correctAnswer": "b"
        },
        {
        "question": "7. Which country is credited with inventing paper?",
        "answers": [
        {"label": "India", "value": "a"},
        {"label": "China", "value": "b"},
        {"label": "Greece", "value": "c"},
        {"label": "Egypt", "value": "d"}
        ],
        "correctAnswer": "b"
        },
        {
        "question": "8. Who was the first U.S. President?",
        "answers": [
        {"label": "Braak Obama", "value": "a"},
        {"label": "George Washington", "value": "b"},
        {"label": "Thomas Jefferson", "value": "c"},
        {"label": "Abraham Lincoln", "value": "d"}
        ],
        "correctAnswer": "b"
        },
        {
        "question": "9. Which ancient civilization built the Great Pyramid of Giza?",
        "answers": [
            {"label": "Mesopotamians", "value": "a"},
            {"label": "Mayans", "value": "b"},
            {"label": "Ancient Egyptians", "value": "c"},
            {"label": "Ancient Indians", "value": "d"}
        ],
        "correctAnswer": "c"
        },
                {
        "question": "10. Who was the first Roman Emperor?",
        "answers": [
            {"label": "Julius Caesar", "value": "a"},
            {"label": "Augustus", "value": "b"},
            {"label": "Nero", "value": "c"},
            {"label": "JB Taylor", "value": "d"}
        ],
        "correctAnswer": "b"
        },
        {
            "question": "11. Which city hosted the first modern Olympic Games?",
            "answers": [
                {"label": "Athens", "value": "a"},
                {"label": "Paris", "value": "b"},
                {"label": "Rome", "value": "c"},
                {"label": "Tokyo", "value": "d"}
            ],
            "correctAnswer": "a"
            },
            {
            "question": "12. Who is credited with writing the U.S. Declaration of Independence?",
            "answers": [
                {"label": "Thomas Jefferson", "value": "a"},
                {"label": "George Washington", "value": "b"},
                {"label": "John Adams", "value": "c"},
                {"label": "Benjamin Franklin", "value": "d"}
            ],
            "correctAnswer": "a"
            },
            {
            "question": "13. Who is credited with writing the U.S. Declaration of Independence?",
            "answers": [
                {"label": "Thomas Jefferson", "value": "a"},
                {"label": "George Washington", "value": "b"},
                {"label": "John Adams", "value": "c"},
                {"label": "Benjamin Franklin", "value": "d"}
            ],
            "correctAnswer": "a"
            },
            {
            "question": "14. Which civilization is known for the creation of the ancient city of Machu Picchu?",
            "answers": [
                {"label": "Inca civilization", "value": "a"},
                {"label": "Mayan civilization", "value": "b"},
                {"label": "Aztec civilization", "value": "c"},
                {"label": "Roman civilization", "value": "d"}
            ],
            "correctAnswer": "a"
            },
            {
            "question": "15. Which famous scientist developed the theory of general relativity?",
            "answers": [
                {"label": "Isaac Newton", "value": "a"},
                {"label": "Albert Einstein", "value": "b"},
                {"label": "Marie Curie", "value": "c"},
                {"label": "Galileo Galilei", "value": "d"}
            ],
            "correctAnswer": "b"
            },
            {
            "question": "16. Which country was responsible for the construction of the Great Wall?",
            "answers": [
                {"label": "China", "value": "a"},
                {"label": "India", "value": "b"},
                {"label": "Egypt", "value": "c"},
                {"label": "Greece", "value": "d"}
            ],
            "correctAnswer": "a"
            },
            {
            "question": "17. Who is known for painting the famous artwork 'The Last Supper'?",
            "answers": [
                {"label": "Leonardo da Vinci", "value": "a"},
                {"label": "Pablo Picasso", "value": "b"},
                {"label": "Vincent van Gogh", "value": "c"},
                {"label": "Michelangelo", "value": "d"}
            ],
            "correctAnswer": "a"
            },
            {
            "question": "18. Which war was fought between the North and the South regions of the United States?",
            "answers": [
                {"label": "American Revolutionary War", "value": "a"},
                {"label": "World War I", "value": "b"},
                {"label": "American Civil War", "value": "c"},
                {"label": "Vietnam War", "value": "d"}
            ],
            "correctAnswer": "c"
            },
            {
            "question": "19. Who was the first African American President of the United States?",
            "answers": [
                {"label": "Barack Obama", "value": "a"},
                {"label": "Martin Luther King Jr.", "value": "b"},
                {"label": "Malcolm X", "value": "c"},
                {"label": "Nelson Mandela", "value": "d"}
            ],
            "correctAnswer": "a"
            },
            {
    question: "20. Who led the revolt of 1857, also known as the First War of Independence, against the British East India Company?",
    "answers": [
      { label: "Rani Lakshmibai", value: "a" },
      { label: "Mangal Pandey", value: "b" },
      { label: "Bahadur Shah Zafar", value: "c" },
      { label: "Tantia Tope", value: "d" }
    ],
    "correctAnswer": "c"
  },
  {
    question: "21. The Indus Valley Civilization flourished in which present-day country?",
    "answers": [
      { label: "India", value: "a" },
      { label: "Pakistan", value: "b" },
      { label: "Bangladesh", value: "c" },
      { label: "Nepal", value: "d" }
    ],
    "correctAnswer": "b"
  },
  {
    question: "22. Who was the first President of India?",
    "answers": [
      { label: "Jawaharlal Nehru", value: "a" },
      { label: "Rajendra Prasad", value: "b" },
      { label: "Indira Gandhi", value: "c" },
      { label: "Abdul Kalam", value: "d" }
    ],
    "correctAnswer": "b"
  },
  {
    question: "23. Which Mughal emperor built the Taj Mahal?",
    "answers": [
      { label: "Akbar", value: "a" },
      { label: "Jahangir", value: "b" },
      { label: "Shah Jahan", value: "c" },
      { label: "Aurangzeb", value: "d" }
    ],
    "correctAnswer": "c"
  },
  
  {
    question: "24. The Quit India Movement was launched in which year?",
    "answers": [
      { label: "1942", value: "a" },
      { label: "1920", value: "b" },
      { label: "1935", value: "c" },
      { label: "1947", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "25. Who is known as the 'Iron Man of India'?",
    "answers": [
      { label: "Mahatma Gandhi", value: "a" },
      { label: "Jawaharlal Nehru", value: "b" },
      { label: "Subhash Chandra Bose", value: "c" },
      { label: "Sardar Vallabhbhai Patel", value: "d" }
    ],
    "correctAnswer": "d"
  },
  {
    question: "26. The Maurya Empire was founded by which ruler?",
    "answers": [
      { label: "Ashoka", value: "a" },
      { label: "Chandragupta Maurya", value: "b" },
      { label: "Harsha", value: "c" },
      { label: "Samudragupta", value: "d" }
    ],
    "correctAnswer": "b"
  },
  {
    question: "27. Who was the first Governor-General of Bengal under the British East India Company?",
    "answers": [
      { label: "Lord Curzon", value: "a" },
      { label: "Robert Clive", value: "b" },
      { label: "Warren Hastings", value: "c" },
      { label: "Lord Cornwallis", value: "d" }
    ],
    "correctAnswer": "c"
  },
  {
    question: "28. Who was the founder of the Khalsa, a military force of Sikh warriors?",
    "answers": [
      { label: "Guru Nanak", value: "a" },
      { label: "Guru Gobind Singh", value: "b" },
      { label: "Maharaja Ranjit Singh", value: "c" },
      { label: "Banda Singh Bahadur", value: "d" }
    ],
    "correctAnswer": "b"
  },
  {
    question: "29. The Battle of Plassey was fought in which year?",
    "answers": [
      { label: "1757", value: "a" },
      { label: "1857", value: "b" },
      { label: "1856", value: "c" },
      { label: "1764", value: "d" }
    ],
    "correctAnswer": "a"
  },

  
  {
    question: "30. Who was the first Indian woman to become President of the Indian National Congress?",
    "answers": [
      { label: "Sarojini Naidu", value: "a" },
      { label: "Indira Gandhi", value: "b" },
      { label: "Annie Besant", value: "c" },
      { label: "Vijaya Lakshmi Pandit", value: "d" }
    ],
    "correctAnswer": "c"
  },
  {
    question: "31. The Swadeshi movement was launched in response to which British policy?",
    "answers": [
      { label: "Partition of Bengal", value: "a" },
      { label: "Doctrine of Lapse", value: "b" },
      { label: "Rowlatt Act", value: "c" },
      { label: "Montagu-Chelmsford Reforms", value: "d" }
    ],
    "correctAnswer": "a"
  },

  {
    question: "32. The ancient university of Nalanda was located in which present-day country?",
    "answers": [
      { label: "India", value: "a" },
      { label: "Bangladesh", value: "b" },
      { label: "Nepal", value: "c" },
      { label: "Pakistan", value: "d" }
    ],
    "correctAnswer": "b"
  },
  {
    question: "33. The Indian National Army (INA) was formed by which leader during World War II?",
    "answers": [
      { label: "Subhash Chandra Bose", value: "a" },
      { label: "Bhagat Singh", value: "b" },
      { label: "Chandrashekhar Azad", value: "c" },
      { label: "Lala Lajpat Rai", value: "d" }
    ],
    "correctAnswer": "a"
  },
{
    question: "34. Who composed the national song of India, 'Vande Mataram'?",
    "answers": [
      { label: "Rabindranath Tagore", value: "a" },
      { label: "Bankim Chandra Chattopadhyay", value: "b" },
      { label: "Sarojini Naidu", value: "c" },
      { label: "Mahatma Gandhi", value: "d" }
    ],
    "correctAnswer": "b"
  },
  {
    question: "35. The Simon Commission was appointed in 1927 to propose constitutional reforms for which country?",
    "answers": [
      { label: "India", value: "a" },
      { label: "Pakistan", value: "b" },
      { label: "Bangladesh", value: "c" },
      { label: "Sri Lanka", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "36. Who was the first Indian to win the Nobel Prize in Literature?",
    "answers": [
      { label: "Rabindranath Tagore", value: "a" },
      { label: "Sarojini Naidu", value: "b" },
      { label: "C. V. Raman", value: "c" },
      { label: "Amartya Sen", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "37. The Battle of Plassey was fought between the forces of the British East India Company and which ruler?",
    "answers": [
      { label: "Shivaji", value: "a" },
      { label: "Tipu Sultan", value: "b" },
      { label: "Siraj ud-Daulah", value: "c" },
      { label: "Haider Ali", value: "d" }
    ],
    "correctAnswer": "c"
  },
  {
    question: "38. Who is known as the 'Iron Lady of India'?",
    "answers": [
      { label: "Sarojini Naidu", value: "a" },
      { label: "Indira Gandhi", value: "b" },
      { label: "Mother Teresa", value: "c" },
      { label: "Pratibha Patil", value: "d" }
    ],
    "correctAnswer": "b"
  },

  {
    question: "39. The Delhi Sultanate was founded by which ruler?",
    "answers": [
      { label: "Sher Shah Suri", value: "a" },
      { label: "Alauddin Khilji", value: "b" },
      { label: "Qutub-ud-din Aibak", value: "c" },
      { label: "Babur", value: "d" }
    ],
    "correctAnswer": "c"
  },
  {
    question: "40. Who led the Dandi March, also known as the Salt Satyagraha, in 1930?",
    "answers": [
      { label: "Mahatma Gandhi", value: "a" },
      { label: "Jawaharlal Nehru", value: "b" },
      { label: "Sardar Vallabhbhai Patel", value: "c" },
      { label: "Subhash Chandra Bose", value: "d" }
    ],
    "correctAnswer": "a"
},

  {
    question: "41. Who led the Dandi March, also known as the Salt Satyagraha, in 1930?",
    "answers": [
      { label: "Mahatma Gandhi", value: "a" },
      { label: "Jawaharlal Nehru", value: "b" },
      { label: "Sardar Vallabhbhai Patel", value: "c" },
      { label: "Subhash Chandra Bose", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "42. Who was the last Viceroy of India?",
    "answers": [
      { label: "Lord Mountbatten", value: "a" },
      { label: "Lord Curzon", value: "b" },
      { label: "Lord Canning", value: "c" },
      { label: "Lord Dalhousie", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "43. The Jallianwala Bagh massacre took place in which city?",
    "answers": [
      { label: "Delhi", value: "a" },
      { label: "Lahore", value: "b" },
      { label: "Amritsar", value: "c" },
      { label: "Kolkata", value: "d" }
    ],
    "correctAnswer": "c"
  },
  {
    question: "44. Who was the first Indian woman to be elected as the President of the United Nations General Assembly?",
    "answers": [
      { label: "Vijaya Lakshmi Pandit", value: "a" },
      { label: "Indira Gandhi", value: "b" },
      { label: "Sarojini Naidu", value: "c" },
      { label: "Pratibha Patil", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "45. The Maratha Empire reached its peak under which ruler?",
    "answers": [
      { label: "Shivaji", value: "a" },
      { label: "Bajirao I", value: "b" },
      { label: "Balaji Baji Rao", value: "c" },
      { label: "Chhatrapati Shahu", value: "d" }
    ],
    "correctAnswer": "b"
  },
  {
    question: "46. Who was the first female President of the Indian National Congress?",
    "answers": [
      { label: "Annie Besant", value: "a" },
      { label: "Sarojini Naidu", value: "b" },
      { label: "Indira Gandhi", value: "c" },
      { label: "Sucheta Kripalani", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "47. The Battle of Buxar was fought in which year?",
    "answers": [
      { label: "1764", value: "a" },
      { label: "1857", value: "b" },
      { label: "1757", value: "c" },
      { label: "1780", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "48. Who is known as the 'Father of Indian Constitution'?",
    "answers": [
      { label: "Mahatma Gandhi", value: "a" },
      { label: "B.R. Ambedkar", value: "b" },
      { label: "Jawaharlal Nehru", value: "c" },
      { label: "Sardar Vallabhbhai Patel", value: "d" }
    ],
    "correctAnswer": "b"
  },
  {
    question: "49. The Indian National Congress was founded in which year?",
    "answers": [
      { label: "1885", value: "a" },
      { label: "1905", value: "b" },
      { label: "1947", value: "c" },
      { label: "1920", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "50. Who was the first Indian woman to win an Olympic medal?",
    "answers": [
      { label: "P.T. Usha", value: "a" },
      { label: "Karnam Malleswari", value: "b" },
      { label: "Mary Kom", value: "c" },
      { label: "Anju Bobby George", value: "d" }
    ],
    "correctAnswer": "b"
  },
  {
    question: "51. The Chola dynasty reached its zenith under the reign of which ruler?",
    "answers": [
      { label: "Raja Raja Chola I", value: "a" },
      { label: "Rajendra Chola I", value: "b" },
      { label: "Kulottunga Chola I", value: "c" },
      { label: "Rajadhiraja Chola", value: "d" }
    ],
    "correctAnswer": "b"
  },
  {
    question: "52. The partition of India into India and Pakistan took place in which year?",
    "answers": [
      { label: "1945", value: "a" },
      { label: "1946", value: "b" },
      { label: "1947", value: "c" },
      { label: "1948", value: "d" }
    ],
    "correctAnswer": "c"
  },
  {
    question: "53. Who is known as the 'Nightingale of India'?",
    "answers": [
      { label: "Sarojini Naidu", value: "a" },
      { label: "Lata Mangeshkar", value: "b" },
      { label: "M.S. Subbulakshmi", value: "c" },
      { label: "Asha Bhosle", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "54. The Harappan civilization was discovered in which decade?",
    "answers": [
      { label: "1910s", value: "a" },
      { label: "1920s", value: "b" },
      { label: "1930s", value: "c" },
      { label: "1940s", value: "d" }
    ],
    "correctAnswer": "b"
  },

  {
    question: "55. Who was the first Indian woman to win the Miss World title?",
    "answers": [
      { label: "Priyanka Chopra", value: "a" },
      { label: "Aishwarya Rai Bachchan", value: "b" },
      { label: "Sushmita Sen", value: "c" },
      { label: "Manushi Chhillar", value: "d" }
    ],
    "correctAnswer": "c"
  },
  {
    question: "56. The Quit India Movement was launched in which year?",
    "answers": [
      { label: "1919", value: "a" },
      { label: "1922", value: "b" },
      { label: "1942", value: "c" },
      { label: "1947", value: "d" }
    ],
    "correctAnswer": "c"
  },
  {
    question: "57. Who was the first Indian astronaut to travel in space?",
    "answers": [
      { label: "Kalpana Chawla", value: "a" },
      { label: "Rakesh Sharma", value: "b" },
      { label: "Sunita Williams", value: "c" },
      { label: "Abdul Kalam", value: "d" }
    ],
    "correctAnswer": "b"
  },
  {
    question: "58. The ancient city of Mohenjo-daro is located in which present-day country?",
    "answers": [
      { label: "India", value: "a" },
      { label: "Pakistan", value: "b" },
      { label: "Bangladesh", value: "c" },
      { label: "Afghanistan", value: "d" }
    ],
    "correctAnswer": "b"
  },
  {
    question: "59. Who was the first Indian to receive the Nobel Prize in Physics?",
    "answers": [
      { label: "C.V. Raman", value: "a" },
      { label: "Hargobind Khorana", value: "b" },
      { label: "Subrahmanyan Chandrasekhar", value: "c" },
      { label: "Amartya Sen", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "60. The Maurya Empire was founded by which ruler?",
    "answers": [
      { label: "Ashoka", value: "a" },
      { label: "Chandragupta Maurya", value: "b" },
      { label: "Bindusara", value: "c" },
      { label: "Samudragupta", value: "d" }
    ],
    "correctAnswer": "b"
  },
  {
    question: "61. Who is known as the 'Father of the Indian Space Program'?",
    "answers": [
      { label: "Homi J. Bhabha", value: "a" },
      { label: "Vikram Sarabhai", value: "b" },
      { label: "A.P.J. Abdul Kalam", value: "c" },
      { label: "Satish Dhawan", value: "d" }
    ],
    "correctAnswer": "b"
  },

  {
    question: "62. The Indian Rebellion of 1857, also known as the Sepoy Mutiny, started in which city?",
    "answers": [
      { label: "Delhi", value: "a" },
      { label: "Lucknow", value: "b" },
      { label: "Kanpur", value: "c" },
      { label: "Meerut", value: "d" }
    ],
    "correctAnswer": "d"
  },
  {
    question: "63. Who is known as the 'Lion of Punjab'?",
    "answers": [
      { label: "Lala Lajpat Rai", value: "a" },
      { label: "Bhagat Singh", value: "b" },
      { label: "Maharaja Ranjit Singh", value: "c" },
      { label: "Guru Gobind Singh", value: "d" }
    ],
    "correctAnswer": "c"
  },
  {
    question: "64. The Battle of Haldighati was fought between which two rulers?",
    "answers": [
      { label: "Akbar and Maharana Pratap", value: "a" },
      { label: "Shivaji and Aurangzeb", value: "b" },
      { label: "Ashoka and Kalinga", value: "c" },
      { label: "Babur and Ibrahim Lodi", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "65. Who was the first Indian to receive the Bharat Ratna, India's highest civilian award?",
    "answers": [
      { label: "Rajendra Prasad", value: "a" },
      { label: "Sarvepalli Radhakrishnan", value: "b" },
      { label: "C. Rajagopalachari", value: "c" },
      { label: "C.V. Raman", value: "d" }
    ],
    "correctAnswer": "b"
  },
  {
    question: "66. The Indus Valley Civilization was predominantly spread across which present-day countries?",
    "answers": [
      { label: "India and Pakistan", value: "a" },
      { label: "India and Bangladesh", value: "b" },
      { label: "India and Nepal", value: "c" },
      { label: "India and Sri Lanka", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "67. Who was the founder of the Ghadar Party, a revolutionary organization in the early 20th century?",
    "answers": [
      { label: "Bhagat Singh", value: "a" },
      { label: "Lala Lajpat Rai", value: "b" },
      { label: "Kartar Singh Sarabha", value: "c" },
      { label: "Chandrasekhar Azad", value: "d" }
    ],
    "correctAnswer": "c"
  },

  {
    question: "68. Who was the first President of the All India Muslim League?",
    "answers": [
      { label: "Muhammad Ali Jinnah", value: "a" },
      { label: "Abul Kalam Azad", value: "b" },
      { label: "Sir Syed Ahmed Khan", value: "c" },
      { label: "Liaquat Ali Khan", value: "d" }
    ],
    "correctAnswer": "c"
  },
  {
    question: "69. The 'Dandi March' was a significant event in which movement?",
    "answers": [
      { label: "Non-Cooperation Movement", value: "a" },
      { label: "Quit India Movement", value: "b" },
      { label: "Civil Disobedience Movement", value: "c" },
      { label: "Swadeshi Movement", value: "d" }
    ],
    "correctAnswer": "c"
  },

  {
    question: "70. Who was the first woman to become the Chief Minister of an Indian state?",
    "answers": [
      { label: "Sucheta Kriplani", value: "a" },
      { label: "Indira Gandhi", value: "b" },
      { label: "Jayalalithaa", value: "c" },
      { label: "Mamata Banerjee", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "71. The 'Cabinet Mission Plan' was formulated in which year?",
    "answers": [
      { label: "1942", value: "a" },
      { label: "1945", value: "b" },
      { label: "1946", value: "c" },
      { label: "1947", value: "d" }
    ],
    "correctAnswer": "c"
  },

  {
    question: "72. Who was the first Indian woman to win an individual Olympic gold medal?",
    "answers": [
      { label: "Karnam Malleswari", value: "a" },
      { label: "P.V. Sindhu", value: "b" },
      { label: "Saina Nehwal", value: "c" },
      { label: "Sakshi Malik", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "73. The Saka Era, which is the official calendar of India, is associated with which ruler?",
    "answers": [
      { label: "Ashoka", value: "a" },
      { label: "Kanishka", value: "b" },
      { label: "Harsha", value: "c" },
      { label: "Chandragupta Maurya", value: "d" }
    ],
    "correctAnswer": "b"
  },

  {
    question: "74. Who wrote the famous book 'Discovery of India'?",
    "answers": [
      { label: "Rabindranath Tagore", value: "a" },
      { label: "Jawaharlal Nehru", value: "b" },
      { label: "Munshi Premchand", value: "c" },
      { label: "Sarojini Naidu", value: "d" }
    ],
    "correctAnswer": "b"
  },
  {
    question: "75. The Vijayanagara Empire was founded in which century?",
    "answers": [
      { label: "14th century", value: "a" },
      { label: "15th century", value: "b" },
      { label: "16th century", value: "c" },
      { label: "17th century", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "76. Who was the first Governor-General of Bengal under the British East India Company?",
    "answers": [
      { label: "Warren Hastings", value: "a" },
      { label: "Robert Clive", value: "b" },
      { label: "Lord Cornwallis", value: "c" },
      { label: "William Bentinck", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "77. The Jallianwala Bagh massacre took place in which city?",
    "answers": [
      { label: "Amritsar", value: "a" },
      { label: "Lahore", value: "b" },
      { label: "Delhi", value: "c" },
      { label: "Kolkata", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "78. Who was the first Indian woman to receive the Nobel Prize?",
    "answers": [
      { label: "Mother Teresa", value: "a" },
      { label: "Indira Gandhi", value: "b" },
      { label: "Amrita Pritam", value: "c" },
      { label: "Rabindranath Tagore", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "79. The Indian National Army (INA) was formed by which leader?",
    "answers": [
      { label: "Bhagat Singh", value: "a" },
      { label: "Subhas Chandra Bose", value: "b" },
      { label: "Chandrashekhar Azad", value: "c" },
      { label: "Sardar Vallabhbhai Patel", value: "d" }
    ],
    "correctAnswer": "b"
  },
  {
    question: "80. The Chittorgarh Fort, known for its tales of valor, is located in which Indian state?",
    "answers": [
      { label: "Rajasthan", value: "a" },
      { label: "Gujarat", value: "b" },
      { label: "Madhya Pradesh", value: "c" },
      { label: "Uttar Pradesh", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "81. Who was the last Viceroy of India?",
    "answers": [
      { label: "Lord Mountbatten", value: "a" },
      { label: "Lord Curzon", value: "b" },
      { label: "Lord Dalhousie", value: "c" },
      { label: "Lord Wavell", value: "d" }
    ],
    "correctAnswer": "a"
  },

  {
    question: "82. The Indian Rebellion of 1857 was sparked by the introduction of which rifle cartridge?",
    "answers": [
      { label: "Lee-Enfield", value: "a" },
      { label: "Brown Bess", value: "b" },
      { label: "Minié ball", value: "c" },
      { label: "Greased Cartridge", value: "d" }
    ],
    "correctAnswer": "d"
  },
  {
    question: "83. Who is considered the 'Father of the Indian Constitution'?",
    "answers": [
      { label: "Mahatma Gandhi", value: "a" },
      { label: "B.R. Ambedkar", value: "b" },
      { label: "Jawaharlal Nehru", value: "c" },
      { label: "Sardar Vallabhbhai Patel", value: "d" }
    ],
    "correctAnswer": "b"
  },
  {
    question: "84. The Battle of Plassey was fought in the year?",
    "answers": [
      { label: "1757", value: "a" },
      { label: "1764", value: "b" },
      { label: "1857", value: "c" },
      { label: "1947", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "85. Who was the first Indian to win an individual Olympic gold medal?",
    "answers": [
      { label: "Milkha Singh", value: "a" },
      { label: "Abhinav Bindra", value: "b" },
      { label: "Sushil Kumar", value: "c" },
      { label: "Mary Kom", value: "d" }
    ],
    "correctAnswer": "b"
  },
  {
    question: "86. The Harappan Civilization is also known as the ________ Civilization.",
    "answers": [
      { label: "Indus Valley", value: "a" },
      { label: "Gupta", value: "b" },
      { label: "Mauryan", value: "c" },
      { label: "Chola", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "87. Who was the first Indian to win the Booker Prize for Fiction?",
    "answers": [
      { label: "Arundhati Roy", value: "a" },
      { label: "Salman Rushdie", value: "b" },
      { label: "Kiran Desai", value: "c" },
      { label: "Aravind Adiga", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "88. The Mughal Empire reached its peak under the reign of which emperor?",
    "answers": [
      { label: "Akbar", value: "a" },
      { label: "Shah Jahan", value: "b" },
      { label: "Aurangzeb", value: "c" },
      { label: "Jahangir", value: "d" }
    ],
    "correctAnswer": "a"
  },

  {
    question: "89. Who was the first Indian woman to win an Olympic medal?",
    "answers": [
      { label: "Karnam Malleswari", value: "a" },
      { label: "P.T. Usha", value: "b" },
      { label: "Saina Nehwal", value: "c" },
      { label: "Mary Kom", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "90. Who was the first Governor-General of independent India?",
    "answers": [
      { label: "Jawaharlal Nehru", value: "a" },
      { label: "Rajendra Prasad", value: "b" },
      { label: "Sardar Vallabhbhai Patel", value: "c" },
      { label: "Lord Mountbatten", value: "d" }
    ],
    "correctAnswer": "d"
  },
  {
    question: "91. The Battle of Plassey was fought between which two forces?",
    "answers": [
      { label: "British East India Company and Nawab of Bengal", value: "a" },
      { label: "Marathas and Mughals", value: "b" },
      { label: "Sikhs and Afghans", value: "c" },
      { label: "Vijayanagara Empire and Bahmani Sultanate", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "92. Who is known as the 'Iron Man of India'?",
    "answers": [
      { label: "Mahatma Gandhi", value: "a" },
      { label: "Jawaharlal Nehru", value: "b" },
      { label: "Sardar Vallabhbhai Patel", value: "c" },
      { label: "B.R. Ambedkar", value: "d" }
    ],
    "correctAnswer": "c"
  },
  {
    question: "93. The ancient university of Nalanda, a renowned center of learning, was located in present-day:",
    "answers": [
      { label: "Bihar", value: "a" },
      { label: "Uttar Pradesh", value: "b" },
      { label: "Madhya Pradesh", value: "c" },
      { label: "Rajasthan", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "94. Who was the first Indian cricketer to score a triple century in Test cricket?",
    "answers": [
      { label: "Sachin Tendulkar", value: "a" },
      { label: "Rahul Dravid", value: "b" },
      { label: "Virender Sehwag", value: "c" },
      { label: "Virat Kohli", value: "d" }
    ],
    "correctAnswer": "c"
  },

  {
    question: "95. Who is known as the 'Nightingle of India'?",
    "answers": [
      { label: "Lata Mangeshkar", value: "a" },
      { label: "Asha Bhosle", value: "b" },
      { label: "Kishore Kumar", value: "c" },
      { label: "Sarojini Naidu", value: "d" }
    ],
    "correctAnswer": "d"
  },
  {
    question: "96. Who was the first President of the Indian National Congress?",
    "answers": [
      { label: "Mahatma Gandhi", value: "a" },
      { label: "Jawaharlal Nehru", value: "b" },
      { label: "Dadabhai Naoroji", value: "c" },
      { label: "Bal Gangadhar Tilak", value: "d" }
    ],
    "correctAnswer": "c"
  },
  {
    question: "97. The Dholavira archaeological site, belonging to the Indus Valley Civilization, is located in which present-day state?",
    "answers": [
      { label: "Gujarat", value: "a" },
      { label: "Maharashtra", value: "b" },
      { label: "Haryana", value: "c" },
      { label: "Punjab", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "98. Who was the first Indian to receive the Nobel Prize in Literature?",
    "answers": [
      { label: "Rabindranath Tagore", value: "a" },
      { label: "Munshi Premchand", value: "b" },
      { label: "Sarojini Naidu", value: "c" },
      { label: "Amartya Sen", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "99. The 'Quit India Movement' was launched in which year?",
    "answers": [
      { label: "1940", value: "a" },
      { label: "1942", value: "b" },
      { label: "1945", value: "c" },
      { label: "1947", value: "d" }
    ],
    "correctAnswer": "b"
  },
  {
    question: "100. Who was the founder of the Gupta Empire?",
    "answers": [
      { label: "Chandragupta Maurya", value: "a" },
      { label: "Samudragupta", value: "b" },
      { label: "Chandragupta I", value: "c" },
      { label: "Skandagupta", value: "d" }
    ],
    "correctAnswer": "c"
  },
  {
    question: "101. Who is known as the 'Father of Indian Cinema'?",
    "answers": [
      { label: "Satyajit Ray", value: "a" },
      { label: "Dadasaheb Phalke", value: "b" },
      { label: "Raj Kapoor", value: "c" },
      { label: "Guru Dutt", value: "d" }
    ],
    "correctAnswer": "b"
  },

  {
    question: "102. Who was the first Indian woman to win an Olympic medal?",
    "answers": [
      { label: "Karnam Malleswari", value: "a" },
      { label: "P.T. Usha", value: "b" },
      { label: "Saina Nehwal", value: "c" },
      { label: "Mary Kom", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "103. Who was the first Governor-General of independent India?",
    "answers": [
      { label: "Jawaharlal Nehru", value: "a" },
      { label: "Rajendra Prasad", value: "b" },
      { label: "Sardar Vallabhbhai Patel", value: "c" },
      { label: "Lord Mountbatten", value: "d" }
    ],
    "correctAnswer": "d"
  },
  {
    question: "104. The Battle of Plassey was fought between which two forces?",
    "answers": [
      { label: "British East India Company and Nawab of Bengal", value: "a" },
      { label: "Marathas and Mughals", value: "b" },
      { label: "Sikhs and Afghans", value: "c" },
      { label: "Vijayanagara Empire and Bahmani Sultanate", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "105. Who is known as the 'Iron Man of India'?",
    "answers": [
      { label: "Mahatma Gandhi", value: "a" },
      { label: "Jawaharlal Nehru", value: "b" },
      { label: "Sardar Vallabhbhai Patel", value: "c" },
      { label: "B.R. Ambedkar", value: "d" }
    ],
    "correctAnswer": "c"
  },
  {
    question: "106. The ancient university of Nalanda, a renowned center of learning, was located in present-day:",
    "answers": [
      { label: "Bihar", value: "a" },
      { label: "Uttar Pradesh", value: "b" },
      { label: "Madhya Pradesh", value: "c" },
      { label: "Rajasthan", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "107. Who was the first Indian cricketer to score a triple century in Test cricket?",
    "answers": [
      { label: "Sachin Tendulkar", value: "a" },
      { label: "Rahul Dravid", value: "b" },
      { label: "Virender Sehwag", value: "c" },
      { label: "Virat Kohli", value: "d" }
    ],
    "correctAnswer": "c"
  },
  {
    question: "108. Who is known as the 'Nightingle of India'?",
    "answers": [
      { label: "Lata Mangeshkar", value: "a" },
      { label: "Asha Bhosle", value: "b" },
      { label: "Kishore Kumar", value: "c" },
      { label: "Sarojini Naidu", value: "d" }
    ],
    "correctAnswer": "d"
  },
  {
    question: "109. Who was the first President of the Indian National Congress?",
    "answers": [
      { label: "Mahatma Gandhi", value: "a" },
      { label: "Jawaharlal Nehru", value: "b" },
      { label: "Dadabhai Naoroji", value: "c" },
      { label: "Bal Gangadhar Tilak", value: "d" }
    ],
    "correctAnswer": "c"
  },
  {
    question: "110. The Dholavira archaeological site, belonging to the Indus Valley Civilization, is located in which present-day state?",
    "answers": [
      { label: "Gujarat", value: "a" },
      { label: "Maharashtra", value: "b" },
      { label: "Haryana", value: "c" },
      { label: "Punjab", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "111. Who was the first Indian to receive the Nobel Prize in Literature?",
    "answers": [
      { label: "Rabindranath Tagore", value: "a" },
      { label: "Munshi Premchand", value: "b" },
      { label: "Sarojini Naidu", value: "c" },
      { label: "Amartya Sen", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "112. The 'Quit India Movement' was launched in which year?",
    "answers": [
      { label: "1940", value: "a" },
      { label: "1942", value: "b" },
      { label: "1945", value: "c" },
      { label: "1947", value: "d" }
    ],
    "correctAnswer": "b"
  },
  {
    question: "113. Who was the founder of the Gupta Empire?",
    "answers": [
      { label: "Chandragupta Maurya", value: "a" },
      { label: "Samudragupta", value: "b" },
      { label: "Chandragupta I", value: "c" },
      { label: "Skandagupta", value: "d" }
    ],
    "correctAnswer": "c"
  },
  {
    question: "114. Who is known as the 'Father of Indian Cinema'?",
    "answers": [
      { label: "Satyajit Ray", value: "a" },
      { label: "Dadasaheb Phalke", value: "b" },
      { label: "Raj Kapoor", value: "c" },
      { label: "Guru Dutt", value: "d" }
    ],
    "correctAnswer": "b"
  },
  {
    question: "115. Who was the first Indian woman to become the Prime Minister of India?",
    "answers": [
      { label: "Indira Gandhi", value: "a" },
      { label: "Sonia Gandhi", value: "b" },
      { label: "Pratibha Patil", value: "c" },
      { label: "Mayawati", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "116. The historic 'Dandi March' led by Mahatma Gandhi in 1930 was a protest against which British law?",
    "answers": [
      { label: "Rowlatt Act", value: "a" },
      { label: "Indian Forest Act", value: "b" },
      { label: "Salt Act", value: "c" },
      { label: "Government of India Act", value: "d" }
    ],
    "correctAnswer": "c"
  },
  {
    question: "117. Who was the last Viceroy of British India?",
    "answers": [
      { label: "Louis Mountbatten", value: "a" },
      { label: "Lord Canning", value: "b" },
      { label: "Lord Curzon", value: "c" },
      { label: "Lord Dalhousie", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "118. Which famous revolutionary was also known as 'Shaheed-e-Azam'?",
    "answers": [
      { label: "Bhagat Singh", value: "a" },
      { label: "Chandra Shekhar Azad", value: "b" },
      { label: "Sardar Vallabhbhai Patel", value: "c" },
      { label: "Subhash Chandra Bose", value: "d" }
    ],
    "correctAnswer": "a"
  },
  {
    question: "119. The ancient city of Hampi, a UNESCO World Heritage Site, was the capital of which historical empire?",
    "answers": [
      { label: "Maurya Empire", value: "a" },
      { label: "Vijayanagara Empire", value: "b" },
      { label: "Mughal Empire", value: "c" },
      { label: "Gupta Empire", value: "d" }
    ],
    "correctAnswer": "b"
  },
  {
    question: "120. Who authored the famous book 'Discovery of India'?",
    "answers": [
      { label: "Rabindranath Tagore", value: "a" },
      { label: "Jawaharlal Nehru", value: "b" },
      { label: "M.K. Gandhi", value: "c" },
      { label: "Sarojini Naidu", value: "d" }
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

        