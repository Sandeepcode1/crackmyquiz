<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css"> 
  <title>About Me</title>
  <style>
    .about-section {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 50px;
    }

    .about-content {
      width: 60%;
      padding-right: 50px;
    }

    .about-image {
      width: 35%;
    }

    @media (max-width: 768px) {
      .about-section {
        flex-direction: column;
        align-items: flex-start;
      }

      .about-content,
      .about-image {
        width: 100%;
        padding-right: 0;
      }
    }
  </style>
</head>

<body>
<?php include 'navbar.php'; ?>
  <div class="container">
    <div class="about-section">
      <div class="about-content">
        <h2>About Me</h2>
       <p>I am Sandeep Kumar, a Web Developer from Ludhiana, Punjab. I created this website for those who
         are preparing for competitive exams and want to increase their general knowledge. It is also
          beneficial for students. If I have made any mistakes, please forgive me. 
          Thank you for visiting my website, and best of luck for your future!</p>
      </div>
      <div class="about-image">
        <img src="images/history.png" alt="Passport Photo" class="img-fluid">
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
