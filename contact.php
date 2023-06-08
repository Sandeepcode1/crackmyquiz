<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  $to = 'sandeepkn92@gmail.com';
  $subject = 'Contact Form Submission';
  $body = "Name: $name\nEmail: $email\n\n$message";
  
  // Send email
  if (mail($to, $subject, $body)) {
    echo '<script>alert("Email sent successfully.");</script>';
  } else {
    echo '<script>alert("Failed to send email.");</script>';
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="css/style.css"> 
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
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Contact Us</h5>
            <form action="contact.php" method="POST">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

          </div>
        </div>
      </div>
    </div>
  </div>

   <?php include 'footer.php'; ?> 

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</body>
</html>
