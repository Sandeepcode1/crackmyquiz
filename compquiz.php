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
<h3 style="text-align: center; margin-top: 20px;">Computer Quiz</h3>
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
        "question": "1. Who invented the World Wide Web?",
        "answers": [
        {"label": "Tim Berners-Lee", "value": "a"},
        {"label": "Bill Gates", "value": "b"},
        {"label": "Steve Jobs", "value": "c"},
        {"label": "Mark Zuckerberg", "value": "d"}
        ],
        "correctAnswer": "a"
        },
        {
        "question": "2. Who is considered the father of modern computer science?",
        "answers": [
        {"label": "Alan Turing", "value": "a"},
        {"label": "Charles Babbage", "value": "b"},
        {"label": "Steve Wozniak", "value": "c"},
        {"label": "Larry Page", "value": "d"}
        ],
        "correctAnswer": "a"
        },

        {
        "question": "3. What is the most widely used programming language?",
        "answers": [
        {"label": "Java", "value": "a"},
        {"label": "C++", "value": "b"},
        {"label": "Python", "value": "c"},
        {"label": "JavaScript", "value": "d"}
        ],
        "correctAnswer": "c"
        },

        {
        "question": "4. What does the acronym 'URL' stand for?",
        "answers": [
        {"label": "Universal Resource Locator", "value": "a"},
        {"label": "Uniform Resource Locator", "value": "b"},
        {"label": "Unified Resource Locator", "value": "c"},
        {"label": "Unique Resource Locator", "value": "d"}
        ],
        "correctAnswer": "b"
        },

        {
        "question": "5. What is the primary function of an operating system?",
        "answers": [
        {"label": "Running computer games", "value": "a"},
        {"label": "Managing hardware resources", "value": "b"},
        {"label": "Editing documents", "value": "c"},
        {"label": "Browsing the internet", "value": "d"}
        ],
        "correctAnswer": "b"
        },

        {
        "question": "6. What is the binary equivalent of the decimal number '10'?",
        "answers": [
        {"label": "1010", "value": "a"},
        {"label": "1100", "value": "b"},
        {"label": "1110", "value": "c"},
        {"label": "1001", "value": "d"}
        ],
        "correctAnswer": "a"
        },
        {
        "question": "7. What is the purpose of a firewall in computer security?",
        "answers": [
        {"label": "Protecting against viruses", "value": "a"},
        {"label": "Preventing unauthorized access", "value": "b"},
        {"label": "Accelerating internet speed", "value": "c"},
        {"label": "Cleaning up disk space", "value": "d"}
        ],
        "correctAnswer": "b"
        },

        {
        "question": "8. What is the maximum value that can be represented by a 32-bit signed integer?",
        "answers": [
        {"label": "2^32", "value": "a"},
        {"label": "2^31", "value": "b"},
        {"label": "2^16", "value": "c"},
        {"label": "2^64", "value": "d"}
        ],
        "correctAnswer": "b"
        },

        {
        "question": "9. Which programming language is often used for developing mobile applications?",
        "answers": [
        {"label": "Java", "value": "a"},
        {"label": "Swift", "value": "b"},
        {"label": "C#", "value": "c"},
        {"label": "All of the above", "value": "d"}
        ],
        "correctAnswer": "d"
        },

        {
        "question": "10. What is the primary purpose of an HTML tag?",
        "answers": [
        {"label": "Styling web pages", "value": "a"},
        {"label": "Defining the structure of web content", "value": "b"},
        {"label": "Executing JavaScript code", "value": "c"},
        {"label": "Displaying images", "value": "d"}
        ],
        "correctAnswer": "b"
        },

        {
        "question": "11. What does the acronym 'CPU' stand for?",
        "answers": [
        {"label": "Central Processing Unit", "value": "a"},
        {"label": "Computer Processing Unit", "value": "b"},
        {"label": "Central Program Unit", "value": "c"},
        {"label": "Computer Power Unit", "value": "d"}
        ],
        "correctAnswer": "a"
        },
        {
        "question": "12. What is the default file extension for a Microsoft Word document?",
        "answers": [
        {"label": ".docx", "value": "a"},
        {"label": ".txt", "value": "b"},
        {"label": ".pdf", "value": "c"},
        {"label": ".xlsx", "value": "d"}
        ],
        "correctAnswer": "a"
        },

        {
        "question": "13. What is the shortcut key combination to save a Microsoft Word document?",
        "answers": [
        {"label": "Ctrl + S", "value": "a"},
        {"label": "Ctrl + C", "value": "b"},
        {"label": "Ctrl + V", "value": "c"},
        {"label": "Ctrl + P", "value": "d"}
        ],
        "correctAnswer": "a"
        },

        {
        "question": "14. Which feature in Microsoft Word allows you to view and edit different parts of a document at the same time?",
        "answers": [
        {"label": "Page Layout", "value": "a"},
        {"label": "Split View", "value": "b"},
        {"label": "Header and Footer", "value": "c"},
        {"label": "Mail Merge", "value": "d"}
        ],
        "correctAnswer": "b"
        },

        {
        "question": "15. What is the purpose of the 'Track Changes' feature in Microsoft Word?",
        "answers": [
        {"label": "Change the document's font style", "value": "a"},
        {"label": "Highlight spelling errors", "value": "b"},
        {"label": "Record and display edits made to a document", "value": "c"},
        {"label": "Apply text formatting", "value": "d"}
        ],
        "correctAnswer": "c"
        },

        {
        "question": "16. Which view in Microsoft Word allows you to see how your document will look when printed?",
        "answers": [
        {"label": "Print Layout", "value": "a"},
        {"label": "Web Layout", "value": "b"},
        {"label": "Outline View", "value": "c"},
        {"label": "Draft View", "value": "d"}
        ],
        "correctAnswer": "a"
        },
        {
        "question": "17. What is the keyboard shortcut to undo the last action in Microsoft Paint?",
        "answers": [
        {"label": "Ctrl + Z", "value": "a"},
        {"label": "Ctrl + C", "value": "b"},
        {"label": "Ctrl + V", "value": "c"},
        {"label": "Ctrl + S", "value": "d"}
        ],
        "correctAnswer": "a"
        },

        {
        "question": "18. Which tool in Microsoft Paint allows you to draw freehand lines and shapes?",
        "answers": [
        {"label": "Pencil", "value": "a"},
        {"label": "Brush", "value": "b"},
        {"label": "Eraser", "value": "c"},
        {"label": "Text", "value": "d"}
        ],
        "correctAnswer": "a"
        },

        {
        "question": "19. What is the purpose of the 'Fill with Color' tool in Microsoft Paint?",
        "answers": [
        {"label": "Change the canvas size", "value": "a"},
        {"label": "Apply a gradient effect", "value": "b"},
        {"label": "Fill a selected area with a specific color", "value": "c"},
        {"label": "Add a drop shadow to objects", "value": "d"}
        ],
        "correctAnswer": "c"
        },

        {
        "question": "20. Which view in Microsoft Paint allows you to see the image in its actual size?",
        "answers": [
        {"label": "Zoom In", "value": "a"},
        {"label": "Actual Pixels", "value": "b"},
        {"label": "Fit to Window", "value": "c"},
        {"label": "Rotate", "value": "d"}
        ],
        "correctAnswer": "b"
        },

        {
        "question": "21. What file formats are supported for saving images in Microsoft Paint?",
        "answers": [
        {"label": ".bmp", "value": "a"},
        {"label": ".jpg", "value": "b"},
        {"label": ".png", "value": "c"},
        {"label": "All of the above", "value": "d"}
        ],
        "correctAnswer": "d"
        },
        {
        "question": "22. What is the default slide layout in Microsoft PowerPoint?",
        "answers": [
        {"label": "Title Slide", "value": "a"},
        {"label": "Blank Slide", "value": "b"},
        {"label": "Two Content Slide", "value": "c"},
        {"label": "Comparison Slide", "value": "d"}
        ],
        "correctAnswer": "a"
        },

        {
        "question": "23. Which feature in Microsoft PowerPoint allows you to add special visual effects to text and objects?",
        "answers": [
        {"label": "Animations", "value": "a"},
        {"label": "Transitions", "value": "b"},
        {"label": "SmartArt", "value": "c"},
        {"label": "Master Slides", "value": "d"}
        ],
        "correctAnswer": "a"
        },

        {
        "question": "24. What is the purpose of the 'Slide Sorter' view in Microsoft PowerPoint?",
        "answers": [
        {"label": "Add speaker notes to slides", "value": "a"},
        {"label": "Rearrange and organize slides", "value": "b"},
        {"label": "Apply slide transitions", "value": "c"},
        {"label": "Change the slide layout", "value": "d"}
        ],
        "correctAnswer": "b"
        },

        {
        "question": "25. Which option in Microsoft PowerPoint allows you to rehearse and time your presentation?",
        "answers": [
        {"label": "Slide Master", "value": "a"},
        {"label": "Slide Show", "value": "b"},
        {"label": "Design Ideas", "value": "c"},
        {"label": "Review Comments", "value": "d"}
        ],
        "correctAnswer": "b"
        },

        {
        "question": "26. What file format is commonly used for sharing PowerPoint presentations?",
        "answers": [
        {"label": ".pptx", "value": "a"},
        {"label": ".docx", "value": "b"},
        {"label": ".xlsx", "value": "c"},
        {"label": ".pdf", "value": "d"}
        ],
        "correctAnswer": "a"
        },
        {
        "question": "27. What is the primary function of an operating system?",
        "answers": [
        {"label": "Running computer programs", "value": "a"},
        {"label": "Managing hardware resources", "value": "b"},
        {"label": "Connecting to the internet", "value": "c"},
        {"label": "Storing files and folders", "value": "d"}
        ],
        "correctAnswer": "b"
        },

        {
        "question": "28. What is the main purpose of RAM (Random Access Memory) in a computer?",
        "answers": [
        {"label": "Storing permanent data", "value": "a"},
        {"label": "Executing program instructions", "value": "b"},
        {"label": "Maintaining long-term storage", "value": "c"},
        {"label": "Connecting peripheral devices", "value": "d"}
        ],
        "correctAnswer": "b"
        },

        {
        "question": "29. What does CPU stand for in the context of computers?",
        "answers": [
        {"label": "Central Processing Unit", "value": "a"},
        {"label": "Computer Programming Unit", "value": "b"},
        {"label": "Control Processing Unit", "value": "c"},
        {"label": "Central Power Unit", "value": "d"}
        ],
        "correctAnswer": "a"
        },

        {
        "question": "30. What is the purpose of a browser in a computer?",
        "answers": [
        {"label": "Playing video games", "value": "a"},
        {"label": "Editing documents", "value": "b"},
        {"label": "Browsing the internet", "value": "c"},
        {"label": "Managing emails", "value": "d"}
        ],
        "correctAnswer": "c"
        },

        {
        "question": "31. What is a file extension?",
        "answers": [
        {"label": "A folder that contains multiple files", "value": "a"},
        {"label": "A character used to separate folder names", "value": "b"},
        {"label": "A code that identifies the type of file", "value": "c"},
        {"label": "A program used to compress files", "value": "d"}
        ],
        "correctAnswer": "c"
        },
        {
        "question": "32. What is the primary function of a motherboard in a computer?",
        "answers": [
        {"label": "Running computer programs", "value": "a"},
        {"label": "Storing data and files", "value": "b"},
        {"label": "Managing network connections", "value": "c"},
        {"label": "Connecting and communicating between hardware components", "value": "d"}
        ],
        "correctAnswer": "d"
        },

        {
        "question": "33. What does SSD stand for in the context of computer storage?",
        "answers": [
        {"label": "Solid State Drive", "value": "a"},
        {"label": "System Software Development", "value": "b"},
        {"label": "Secondary Storage Device", "value": "c"},
        {"label": "Serial Data Distribution", "value": "d"}
        ],
        "correctAnswer": "a"
        },

        {
        "question": "34. What is the purpose of a GPU (Graphics Processing Unit) in a computer?",
        "answers": [
        {"label": "Running computer programs", "value": "a"},
        {"label": "Managing network connections", "value": "b"},
        {"label": "Rendering and displaying graphics", "value": "c"},
        {"label": "Processing and storing data", "value": "d"}
        ],
        "correctAnswer": "c"
        },

        {
        "question": "35. What is the role of a power supply unit (PSU) in a computer?",
        "answers": [
        {"label": "Managing network connections", "value": "a"},
        {"label": "Supplying power to the computer components", "value": "b"},
        {"label": "Processing and executing program instructions", "value": "c"},
        {"label": "Storing and retrieving data", "value": "d"}
        ],
        "correctAnswer": "b"
        },

        {
        "question": "36. What is the purpose of a cooling system (such as fans or liquid cooling) in a computer?",
        "answers": [
        {"label": "Rendering and displaying graphics", "value": "a"},
        {"label": "Managing network connections", "value": "b"},
        {"label": "Preventing overheating of computer components", "value": "c"},
        {"label": "Accelerating data processing", "value": "d"}
        ],
        "correctAnswer": "c"
        },
        {
        "question": "37. What does the acronym CPU stand for in relation to a computer?",
        "answers": [
        {"label": "Central Processing Unit", "value": "a"},
        {"label": "Computer Power Unit", "value": "b"},
        {"label": "Central Program Unit", "value": "c"},
        {"label": "Computer Processing Unit", "value": "d"}
        ],
        "correctAnswer": "a"
        },

        {
        "question": "38. What is the role of RAM (Random Access Memory) in a computer?",
        "answers": [
        {"label": "Storing permanent data", "value": "a"},
        {"label": "Executing program instructions", "value": "b"},
        {"label": "Maintaining long-term storage", "value": "c"},
        {"label": "Connecting peripheral devices", "value": "d"}
        ],
        "correctAnswer": "b"
        },

        {
        "question": "39. What is the purpose of a web browser?",
        "answers": [
        {"label": "Creating documents", "value": "a"},
        {"label": "Managing emails", "value": "b"},
        {"label": "Browsing the internet", "value": "c"},
        {"label": "Playing video games", "value": "d"}
        ],
        "correctAnswer": "c"
        },

        {
        "question": "40. What is a file extension?",
        "answers": [
        {"label": "A folder that contains multiple files", "value": "a"},
        {"label": "A character used to separate folder names", "value": "b"},
        {"label": "A code that identifies the type of file", "value": "c"},
        {"label": "A program used to compress files", "value": "d"}
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

        