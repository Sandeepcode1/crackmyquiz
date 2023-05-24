<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 50px 20px;
    }

    .card {
      border: none;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .card-img {
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }
  </style>
</head>
<body>
<?php include 'navbar.php'; ?>
  <div class="container">
    <div class="card">
      <img class="card-img-top" src="images/history.png" alt="Profile Image">
      <div class="card-body">
        <h5 class="card-title">About Me</h5>
        <p class="card-text">I am Sandeep Kumar, a Web Developer from Ludhiana, Punjab. I created this website for those who are preparing for competitive exams and want to increase their general knowledge. It is also beneficial for students. If I have made any mistakes, please forgive me. Thank you for visiting my website, and best of luck for your future!</p>
      </div>
    </div>
  </div>

  <footer class="footer">
    <div class="container">
    <p>&copy; <?php echo date('Y'); ?> My Website. All rights reserved.</p>
    </div>
    </div>
  </footer>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
