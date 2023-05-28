<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
  <title>Privacy Policy</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    h2 {
      margin-top: 0;
    }

    h3 {
      margin-top: 30px;
    }

    p {
      margin-bottom: 20px;
    }

    .privacy-policy-section {
      margin-bottom: 50px;
    }
  </style>
</head>

<body>
  <?php include 'navbar.php'; ?>
  <div class="container">
    <div class="privacy-policy-section">
      <h2>Privacy Policy</h2>
      <p>
        Thank you for visiting our website. This Privacy Policy explains how we handle and protect your personal information
        collected through this website.
      </p>

      <h3>Information Collection</h3>
      <p>
        We want to assure you that we do not collect any personal information from our users. When you visit our website or
        play quizzes, we do not request or store any personally identifiable information.
      </p>

      <h3>Cookies and Analytics</h3>
      <p>
        Our website may use cookies or similar technologies for the purpose of enhancing your browsing experience and improving
        our website's functionality. These cookies do not contain any personal information and are used for technical purposes
        such as website analytics and remembering your quiz progress.
      </p>

      <h3>Third-Party Services</h3>
      <p>
        We may use third-party services, such as Google AdSense, to display advertisements on our website. These services may
        collect anonymous information about your visits to this and other websites in order to provide relevant ads. However,
        no personally identifiable information is shared with these third-party services.
      </p>

      <h3>Children's Privacy</h3>
      <p>
        Our website is not intended for use by children under the age of 13. We do not knowingly collect any personal
        information from children. If you are a parent or guardian and believe that your child has provided personal
        information on our website, please contact us immediately so that we can take appropriate action.
      </p>

      <h3>Updates to the Privacy Policy</h3>
      <p>
        We reserve the right to update or modify this Privacy Policy at any time. Any changes will be effective immediately
        upon posting the updated Privacy Policy on our website.
      </p>

      <p>
        If you have any questions or concerns about our Privacy Policy, please contact us.
      </p>

      <p>
        This Privacy Policy was last updated on <?php echo date('Y'); ?>.
      </p>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <?php include 'footer.php'; ?>
</body>

</html>
